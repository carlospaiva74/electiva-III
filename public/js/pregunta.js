var id_temp = 0;
function add_pregunta(id_producto,name,photo){

	var pregunta = $('#pregunta').val();

	if (pregunta!='') {
		photo_old = photo;

		if (photo=='null') {
			photo = "<i class='navbar-tool-icon czi-user'></i>";
		}else{
			photo = "<img class='rounded-circle' width='50' src='"+photo+"' />";
		}

		$('#new_preguntas').before(`

			<div class="media py-4 border-bottom">
				${photo}
	            <div class="media-body pl-3">
	                <div class="d-flex justify-content-between align-items-center mb-2">
	                  <h6 class="font-size-md mb-0">${name}</h6>	                  
	                </div>
	                <p class="font-size-md mb-1"> ${pregunta} </p>

	                 <!-- comment reply-->
	                 <div id="pregunta-temp-${id_temp}"></div>

	            </div>
		    </div>
                
		`);
		$('#pregunta').val('')
		var id_temp_2 = id_temp;
		$.ajaxSetup({
	        headers: {
	            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')     
	        }
	      }); 

	      $.ajax({
	          url:'/add-preguntas',
	          data:{'pregunta' : pregunta,'id_producto':id_producto},
	          type:'post',
	          beforeSend: function(){
	          	
	          	Snackbar.show({
                    text: `Enviando pregunta, por favor espere...`,
                    pos: 'bottom-right',
                    actionText:"Ok"
                });
	        },
	        success:  function (response) {
	        	$('#pregunta-temp-'+id_temp_2).before(`
	        		<div id="pregunta-${response}"> </div>
	        		<div class="card border-0 box-shadow my-2">
	                    <div class="card-body">
	                      <div class="media">
	                        ${photo}                        
	                        <form class="media-body needs-validation ml-3" novalidate>
	                          <div class="form-group">
	                            <textarea class="form-control" rows="4" 
	                            id="responder-${response}"
	                            placeholder="Responder" required></textarea>
	                            <div class="invalid-feedback">Por favor, rellene el campo.</div>
	                          </div>
	                          <button class="btn btn-primary btn-sm"
	                          type="button"  
	                          onclick="responder(${id_producto},'${name}',${photo_old},${response})"
	                          >Responder</button>
	                        </form>
	                      </div>
	                    </div>
	                  </div>

	        	`);
	        	Snackbar.show({
                    text: `Pregunta enviada con éxito`,
                    pos: 'bottom-right',
                    actionText:"Ok"
                });
	        },
	        statusCode: {
	          404: function() {
	              alert('web not found');
	          }
	        }
	      });
	      id_temp = id_temp + 1;
	}else{
		//alert('Error');
	}
}

function responder(id_producto,name,photo,id){
	var pregunta = $('#responder-'+id).val();

	if (pregunta!='') {
		photo_old = photo;

		if (photo=='null' || photo==null) {
			photo = "<i class='navbar-tool-icon czi-user'></i>";
		}else{
			photo = "<img class='rounded-circle' width='50' src='"+photo+"' />";
		}

		$('#pregunta-'+id).before(`

			<div class="media py-4 border-bottom">
				${photo}
	            <div class="media-body pl-3">
	                <div class="d-flex justify-content-between align-items-center mb-2">
	                  <h6 class="font-size-md mb-0">${name}</h6>	                  
	                </div>
	                <p class="font-size-md mb-1"> ${pregunta} </p>

	                 <!-- comment reply-->
	                 <div id="pregunta-temp-${id_temp}"></div>

	            </div>
		    </div>
                
		`);

		$('#responder-'+id).val('');
		
		var id_temp_2 = id_temp;
		$.ajaxSetup({
	        headers: {
	            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')     
	        }
	      }); 

	      $.ajax({
	          url:'/add-preguntas',
	          data:{'pregunta' : pregunta,'id_producto':id_producto,'id':id},
	          type:'post',
	          beforeSend: function(){
	          	
	          	Snackbar.show({
                    text: `Enviando pregunta, por favor espere...`,
                    pos: 'bottom-right',
                    actionText:"Ok"
                });
	        },
	        success:  function (response) {
	        	Snackbar.show({
                    text: `Pregunta enviada con éxito`,
                    pos: 'bottom-right',
                    actionText:"Ok"
                });
	        },
	        statusCode: {
	          404: function() {
	              alert('web not found');
	          }
	        }
	      });
	     
	}else{
		
	}}