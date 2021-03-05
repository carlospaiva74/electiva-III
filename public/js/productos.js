    $('.precio').keyup(function(){

        var precio = $('#precio').val();
        var oferta = $('#oferta').val();

        if (precio == '') {
            precio = 0;
        }

        if (oferta == '') {
            oferta = 0;
        }else if(oferta > 100){
            oferta = 0;
            $('#oferta').val(0);
        }

        precio = parseFloat(precio);
        oferta = parseFloat(oferta);

        if (oferta==0) {
            $('#total').html(`<h4>$.${precio.toFixed(2)}</h4>`);
        }else{
            

            oferta = (oferta * precio)/100;

            var total_oferta = precio - oferta;

            $('#total').html(`<h4> <small class="mr-3"><strike>$.${precio.toFixed(2)} </strike></small> $.${total_oferta.toFixed(2)}</h4>`);
        }
    });

    function categorias(otros,nombre,id=null,id_categoria=null){

        var subcategorias = categorias_data.filter(data => data.id_categoria == id);

        var html = '';

            subcategorias.forEach(function(data){
                
                html = html + `
                    <a href="javascript:categorias(0,'${data.categoria}',${data.id},${data.id_categoria})" class="list-group-item list-group-item-action">${data.categoria} 
                        <i class="float-right">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                        </i>
                    </a>
                `
            });

        

        if (html=='' || otros==1) {
            $('#input_categoria').val(nombre);
            $('#categorias').modal('hide');

            if (id!='') {
                $('#id_categoria').val(id);
            }

        }else{
            if (subcategorias[0].id_categoria!=null) {
                $('#div-categoria-volver').css({'display':'block'});
                $('#volvel_categoria').attr('href',`javascript:categorias(0,0 , ${id_categoria})`);
                var name = categorias_data.filter(data=>data.id==id);

                html = html + `
                <a href="javascript:categorias(1,'${name[0].categoria}',${id})" class="list-group-item list-group-item-action">Otros 
                    <i class="float-right">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </i>
                </a>`;

            }else{
                $('#div-categoria-volver').css({'display':'none'});

                html = html + `
                <a href="javascript:categorias(1,'Otros')" class="list-group-item list-group-item-action">Otros
                    <i class="float-right">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </i>
                </a>`;
            }

            

            $('#lista-categorias').html(html);
        }
        
    }

    function add_color_personalizado(){
        $('#add_color').before(`<div class="col-md-5">
            <input type="text" max="30" name="color_personalizado[]" class="form-control color_personalizado" placeholder="Ej. Azul con blanco">
            <br>
        </div>`);
    }

    var talla = null;


    function pagina(id,x=0){
        var siguiente =  0;

        if (id=='#img') {

            var producto = $('#producto').val();
            var precio = $('#precio').val();

            if (producto=='' || precio=='') {                
                siguiente = 1; 

                Snackbar.show({
                    text: `Llene todo los campos de carácter obligatorio (*)`,
                    pos: 'bottom-right',
                    actionText:"Ok"
                });

            }

            $('.img-color-div').css({'display':'none'});
            var X = 0;
            $(".colores-check:checked").each(function(){
                X=1;
                id_color = $(this).val();
                $('#img-color-'+id_color).css({'display':'block'});                    
            });
        
            if (X==0) {
                $('#img-color-null').css({'display':'block'}); 
            }
        }      

        if (id=='#stock') {
            siguiente = 0;
        }  

        if (id=='#descripcion') {

            $('.stock').each(function(){
                if ($(this).val() == '') {
                    siguiente = 1;
                }
            });

            $('.stock_minimo').each(function(){
                if ($(this).val() == '') {
                    siguiente = 1;
                }
            });

            if (siguiente==1) {
                Snackbar.show({
                    text: `Llene todo los campos de carácter obligatorio (*)`,
                    pos: 'bottom-right',
                    actionText:"Ok"
                });
            }
        }

        if (siguiente==0) {
            $('.form-productos').css({'display':'none'});
            $(id).css({'display':'block'});
        }
        
    }
    function CrearPeticion(){
        var peticion = null;
        try{
            peticion = new XMLHttpRequest();
        } catch (IntentarMs) {
        try{
            peticion = new ActiveXObject("Msxml2.XMLHTTP");
        } catch(OtroMS){
                try{
                    peticion = new ActiveXObject("Microsoft.XMLHTTP");
                } catch (fallo){
                    peticion = null;
                }
            }
        }

        return peticion;
    }
    
    var preview_id = 0;

    $('.input-foto').change(function(e){
       
        var archivos = $(this);
        var files = archivos[0].files;
        
        for (var i = 0; i < files.length ; i++) {

            let validar = files[i].name;
            let extensiones = validar.substring(validar.lastIndexOf("."));

            if (validar!='') {

                if(extensiones != ".png" && extensiones != ".jpeg" && extensiones != ".jpg"){
                    Snackbar.show({
                        text: 'La extensión de la imagen no es válida, solo se permite extensiones .PNG o .JPG',
                        pos: 'bottom-right',
                        actionText:"Ok"
                    }); 
                }else{
                    let peso = files[i].size;

                    if(peso > 15000000) {
                        Snackbar.show({
                            text: 'Archivo muy pesado Tamaño máximo permitido es de 15Mb',
                            pos: 'bottom-right',
                            actionText:"Ok"
                        }); 
                    }else{
                        var id_color = $(this).attr('color');
                        let id = id_color+'-'+preview_id;            

                        if (id_color=='') {
                            var B = 0
                        }else{
                            var B = id_color;
                        }        

                        $('#imgPreview-'+$(this).attr('color')).before(`
                            <div class="col-md-3" id="div-foto-${id}">
                                <div class='imgPreview' id="imgPreview-${id}"></div>

                                <div> <center> <button type="button" class="btn button-portada-${B} btn-outline-primary" style="display:none;" id="portada-${id}">Definir como portada</button>  </center> </div>

                                <br>

                                <div> <center> <button type="button" class="btn btn-outline-danger" style="display:none;" id="eliminar-${id}">Eliminar</button>  </center> </div>                            
                                
                                <div id="progress-${id_color}-subida-${preview_id}">
                                    <label for='file' id="text-ready-${id}" style='cursor: pointer'>Subiendo foto</label>
                                    <div class="progress mt-1">
                                        <div class="progress-bar" role="progressbar" id="barra-${id}"  aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        `);



                        let reader = new FileReader();

                        reader.readAsDataURL(files[i]);

                        reader.onload = function(){

                            let preview = document.getElementById("imgPreview-"+id),
                            image = document.createElement('img');

                            image.src = reader.result;

                            image.style = "width:100%";
                                    
                            preview.innerHTML = " ";
                            preview.append(image);

                            
                        };
                        
                        let csrf = $('meta[name="csrf-token"]').attr('content');
                                //Capturar el valor de la imagen
                        let informacion = new FormData();
                        informacion.append("archivos",files[i]);
                        informacion.append("_token", csrf);

                        let peticion = CrearPeticion();
                            
                        if(peticion == null){
                            alert("Error al cargar. El navegador no es compatible");
                            return;
                        }else{

                                //Estados de las peticiones

                                 //Cuando termine de cargar el archivo
                                peticion.addEventListener("load", function(result) {

                                    let barra = document.getElementById("barra-"+id);
                                    let texto = document.getElementById("text-ready-"+id);
                                    barra.classList.add("bg-success");
                                    texto.classList.add("text-success");
                                    texto.innerHTML = "Foto añadida correctamente"; 

                                });
                                 //Cuando estoy cargando el archivo
                                peticion.upload.addEventListener("progress", function(e) {                               


                                    let porcentaje = Math.round((e.loaded/e.total) * 100);
                                    
                                    let barra = document.getElementById('barra-'+id);
                                     //Reflejar en la barra de estado el procentaje

                                    barra.style.width = porcentaje + "%";
                                    barra.innerHTML = porcentaje + "%";
                                     
                                });

                                peticion.addEventListener("error", function(){

                                });

                                peticion.addEventListener("abort", function(){
                                    //
                                });


                                peticion.open("POST", route_cargar);
                                
                                peticion.send(informacion);

                                peticion.onreadystatechange = function(){
                                    if(peticion.readyState == 4 && peticion.status == 200){
                                        
                                        if (id_color=='') {
                                            var C = 0
                                        }else{
                                            var C = id_color;
                                        }

                                        $('#eliminar-'+id).css({'display':'block'});
                                        $('#portada-'+id).css({'display':'block'});
                                        $('#eliminar-'+id).attr('onclick','delete_foto("'+id+'")');
                                        $('#portada-'+id).attr('onclick','portada("'+id+'","'+C+'")');                                   

                                        $('#img-db').before(`
                                            <input type="hidden" id="id_color_color-${id}" name="id_foto_color[]" value="${id_color}">
                                            <input type="hidden" id="id_img-${id}" name="img[]" value="${peticion.responseText}">
                                            <input type="hidden" class='img-portada-${C}' id="img-portada-${id}" name="img_portada[]" value="N">

                                        `);
                                    }
                                }

                            preview_id = preview_id + 1;
                        }
                    }
                }
            }
            
        }
    });

    function delete_foto(id){

        var img = $('#id_img-'+id).val();
        $("#div-foto-"+id).css({'display':'none'});

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')     
            }
        }); 

        $.ajax({
            url:route_eliminar,
            data:{img:img},
            type:'post',
            beforeSend: function(){
               
            },
            success:  function (response) {
                $('#id_img-'+id).val('');
                $('#id_color_color'+id).val('');
                $('#img-portada-'+id).val('');
            }                   
        });
    }

    function delete_db_foto(id){
        $("#div-foto-db-"+id).css({'display':'none'});

        $('#img_db_delete').before(`
            <input type="hidden" name="id_foto_delete[]" value="${id}">
        `);

    }

    function portada(id,color){
        $('.button-portada-'+color).removeClass('btn-primary');
        $('.button-portada-'+color).removeClass('text-white');
        $('.button-portada-'+color).removeClass('btn-outline-primary');
        $('.button-portada-'+color).addClass('btn-outline-primary');
        $('#portada-'+id).addClass('btn-primary');
        $('#portada-'+id).addClass('text-white');
        $('.img-portada-'+color).val('N');
        $('#img-portada-'+id).val('S');
    }

    function change_portada_db(id,color){

        $('.button-portada-'+color).removeClass('btn-primary');
        $('.button-portada-'+color).removeClass('text-white');
        $('.button-portada-'+color).removeClass('btn-outline-primary');
        $('.button-portada-'+color).addClass('btn-outline-primary');

        $('#portada-db-'+id).addClass('btn-primary');
        $('#portada-db-'+id).addClass('text-white');
        
        $('.id_img_portada_'+color).val('N');
        $('#id_img_portada_'+id).val('S');

    }