function ubicacion(json){
	$('#departamento').change(function(){

      var value = $(this).val();

      if (value=='') {

        var option = '<option value="">Selecciona una opción</option>';
        $('#municipio').html(option);

      }else{
        var option = '<option value="">Selecciona una opción</option>';

        var municipios = json[value - 1].municipios;

        municipios.forEach(function(element){
          option = option + '<option value="'+element.id+'">'+element.municipio+'</option>';
        });

        $('#municipio').html(option);
      }
    });    
}

function eliminar_ubicacion(){
  window.location = '/eliminar-ubicacion';
}

  function favoritos(id_producto){

    if ($('#favoritos_buttom-'+id_producto).hasClass('bg-danger')) {

      $('#favoritos-icon-'+id_producto).removeClass('text-white');
      $('#favoritos_buttom-'+id_producto).removeClass('bg-danger');   
          
      }else{
        $('#favoritos-icon-'+id_producto).addClass('text-white');
        $('#favoritos_buttom-'+id_producto).addClass('bg-danger');
      }

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')     
        }
      }); 

      $.ajax({
          url:'/favoritos',
          data:{'id_producto' : id_producto},
          type:'post',
          beforeSend: function(){
          
        },
        success:  function (response) {

        },
        statusCode: {
          404: function() {
              alert('web not found');
          }
        }
      });
  }

function buscar(){
  var val = $("#buscar_input").val();

  if (val=='') {
    val = $("#buscador_2").val();
  }

  var categoria = $('#categoria').val();
  if (val!='') {
    if (categoria!='ALL') {
      window.location = "/buscar/"+val+'/'+categoria;
    }else{
      window.location = "/buscar/"+val;
    }
    
  }  
}

$('#buscar_input').keypress(function(e){
  if (e.which==13) {
      buscar();    
  }
});

$("#buscador_2").keypress(function(e){
  if (e.which==13) {
      buscar();    
  }
});