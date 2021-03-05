function stock(){

	var color = $('input:radio[name=color]:checked').val();
	var talla = $('input:radio[name=talla]:checked').val();
	

	if (color=='') { color='null';}
	if (talla=='') {talla='null'; }



	var x1= stock_db.filter(x=> x.id_color == color);
	var x2= x1.filter(y => y.id_talla == talla);

	if (Object.entries(x2).length === 0) {

		$('#comprar').attr('max',0);
		$('#stock-div').html(`<h3 class="text-muted"> 0 <small>Disponible</small></h3>`);

			var html = 
				`<div class="product-badge product-no-disponible mt-n1">
	                <i class="czi-security-close"></i>
	                Agotado
	            </div>`;
		
		$('#status-stock').html(html);

	}else{
		
		$('#comprar').attr('max',x2[0].stock);
		$('#stock-div').html(`<h3 class="text-muted"> ${x2[0].stock} <small>Disponibles</small></h3>`);

		if (x2[0].stock==0) {
			var html = 
				`<div class="product-badge product-no-disponible mt-n1">
	                <i class="czi-security-close"></i>
	                Agotado
	            </div>`;
		}else{
			var html = 
				`<div class="product-badge product-available mt-n1">
	                <i class="czi-security-check"></i>Producto disponible
	            </div>`;
		}
		$('#status-stock').html(html);
	}

	
	//tallas_db.filter(x => x.id_tipo_talla == talla);
}

function cambiar_foto(id){
	$('.fotos').css({'display':'none'});
	$('#fotos-'+id).css({'display':'flex'});
	stock();
}

function spinner_carrito(){
	$('#div-cart').html(`
		<center>
            <div class="spinner-grow text-primary" role="status" style="width: 6rem; height: 6rem;">
                <span class="sr-only">Loading...</span>
            </div>
        </center>`);
}

function carrito_on(id){

	$('#div-cart').html(`
		<button class="btn btn-outline-primary btn-shadow btn-block mb-4 mt-1" 
				  type="button" onclick="carrito('${id}');">
				  <i class="czi-cart font-size-lg mr-2"></i>
				  Añadir al carrito
		</button>   
	`);
}

function sum_carrito(){
	var value = $('#numero_carrito').html();
	value = parseInt(value);
	value = value + 1; 
	if (value>0) {
		$('#numero_carrito').css({'display':'block'});
	}
	$('#numero_carrito').html(value);
}

function res_carrito(){
	var value = $('#numero_carrito').html();
	value = parseInt(value);
	value = value - 1; 

	if (value<=0) {
		$('#numero_carrito').css({'display':'none'});
	}

	$('#numero_carrito').html(value);
}

function carrito(id){

	var color = $('input:radio[name=color]:checked').val();
	var talla = $('input:radio[name=talla]:checked').val();
	var cantidad = $('#comprar').val();
	var stock = $('#comprar').attr('max');

	cantidad = parseInt(cantidad);
	stock = parseInt(stock);

	if (cantidad > stock) {
		Snackbar.show({
            text: `La cantidad solicitada es superior a la cantidad disponible del producto`,
            pos: 'bottom-right',
            actionText:"Ok"
        });
	}else{

		if (cantidad < 1) {	

			Snackbar.show({
	            text: `Por favor establezca una cantidad mayor o igual a uno`,
	            pos: 'bottom-right',
	            actionText:"Ok"
	        });

		}else{
			if (color=='' || color=='undefined' || color==undefined || color==false) {color='null';}
			if (talla=='' || talla=='undefined' || talla==undefined || talla==false) {talla='null';}
			if (cantidad=='' || cantidad<1 || cantidad=='undefined') { cantidad = 1;}

			var data = {
				producto: id,
				talla: talla,
				color: color,
				cantidad: cantidad
			};

			$.ajaxSetup({
		        headers: {
		            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')     
		        }
		    }); 

		    $.ajax({
		        url:'/carrito/add',
		        data:data,
		        type:'post',
		        beforeSend: function(){
		        	spinner_carrito();
		        	Snackbar.show({
	                    text: `Añadiendo al carrito, por favor espere...`,
	                    pos: 'bottom-right',
	                    actionText:"Ok"
	                });
		        },
		        success: function (response) {

		        	if (response=='success') {

		        		sum_carrito();
		        		
						Snackbar.show({
		                    text: `Producto añadido al carrito con éxito `,
		                    pos: 'bottom-right',
		                    actionText:"Ok"
		                });
		        	}

		        	if (response=='update') {
		        		Snackbar.show({
		                    text: `Carrito actualizado con éxito`,
		                    pos: 'bottom-right',
		                    actionText:"Ok"
		                });
		        	}

		        	if (response==false) {
		        		Snackbar.show({
		                    text: `El producto ya existe en el carrito`,
		                    pos: 'bottom-right',
		                    actionText:"Ok"
		                });
		        	}

		        	carrito_on(id);
		        },
		        error: function (err){

		        }                   
		    });
		}	
	}
}

function remove_carrito(id){

	$.ajaxSetup({
		headers: {
		    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')     
		}
	}); 

	$.ajax({
		url:'/carrito/remove',
		data:{producto:id},
		type:'post',
		beforeSend: function(){
			spinner_carrito();
			Snackbar.show({
	            text: `Eliminando producto del carrito, por favor espere…`,
	            pos: 'bottom-right',
	            actionText:"Ok"
	        });
		},
		success: function (response) {
		    $('#div-cart').html(`
				<button class="btn btn-outline-primary btn-shadow btn-block mb-4 mt-1" 
				    type="button" onclick="carrito('${id}');">
				    <i class="czi-cart font-size-lg mr-2"></i>
				    Añadir al carrito
				</button>   
			`);
			res_carrito();	

			Snackbar.show({
	            text: `El producto se eliminó del carrito con éxito`,
	            pos: 'bottom-right',
	            actionText:"Ok"
	        });	   
		},
		error: function (err){

		}                   
	});
}