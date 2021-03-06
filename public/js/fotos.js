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
                    
                    let id = preview_id;                    

                    $('#imgPreview').before(`
                        <div class="col-md-3" id="div-foto-${id}">
                            <div class='imgPreview' id="imgPreview-${id}"></div>
                            <br>
                            <div> <center> <button type="button" class="btn btn-outline-danger" style="display:none;" id="eliminar-${id}">Eliminar</button>  </center> </div>
                            <div id="progress-subida-${preview_id}">
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

                            peticion.addEventListener("error", function(e){
                                console.log(e);
                            });

                            peticion.addEventListener("abort", function(){
                                //
                            });


                            peticion.open("POST", df_route_cargar);
                            
                            peticion.send(informacion);

                            peticion.onreadystatechange = function(){
                                if(peticion.readyState == 4 && peticion.status == 200){
                                    
                                    $('#eliminar-'+id).css({'display':'block'});
                                    $('#eliminar-'+id).attr('onclick','delete_foto("'+id+'")');
                                    $("#eliminar-"+id).before(`
                                        <input type="hidden" id="id_img-${id}" name="foto[]" value="${peticion.responseText}">
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

    //var img = $('#id_img-'+id).val();
    //$("#div-foto-"+id).css({'display':'none'});
    $("#div-foto-"+id+'').html('');
}