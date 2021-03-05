function nueva(){
	$('#direccion').modal('show');
}

function select_departamentos(id){
	$('#D-departamento-'+id).change(function(){
	 var json = departamentos;
	  var value = $(this).val();

      if (value=='') {

        var option = '<option value="">Selecciona una opción</option>';
        $('#D-municipio-'+id).html(option);

      }else{
        var option = '<option value="">Selecciona una opción</option>';

        var municipios = json[value - 1].municipios;

        municipios.forEach(function(element){
          option = option + '<option value="'+element.id+'">'+element.municipio+'</option>';
        });

        $('#D-municipio-'+id).html(option);
      }
	});
}


$('.numero').keyup(function(){
	
	var n1 = $('#numero_1').val();
	var n2 = $('#numero_2').val();

	if (n1 == '' && n2=='') {
		$('.numero').attr('require',false);
	}else{
		$('.numero').attr('require',true);
	}
});

function edit(id){
	$('#direccion-'+id).modal('show');
}