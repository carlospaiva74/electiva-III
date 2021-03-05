
$('#estado').change(function(){

	var val = $(this).val();
	var html_municipio = '<option value="">Seleccione una opción</option>';
	if (val!='') {
		var municipios = estados.filter(data => data.id == val)[0].municipios;
		municipios.forEach(function(element){

			html_municipio = html_municipio + `
				<option value="${element.id}"> ${element.municipio}</option>
			`;
		});
		//console.log(municipios);
	}

	$('#municipio').html(html_municipio);
	$('#parroquia').html(html_municipio);
});

$('#municipio').change(function(){
	var val = $(this).val();
	var html_parroquia = '<option value=""> Seleccione una opción</option>';

	if (val!='') {
		var id_estado = $('#estado').val();
		var municipios = estados.filter(data => data.id == id_estado)[0].municipios;
		var parroquias = municipios.filter(data => data.id  == val)[0].parroquias;

		parroquias.forEach(function(element){
			html_parroquia = html_parroquia + `
				<option value="${element.id}"> ${element.parroquia}</option>
			`;
		});
	}

	$('#parroquia').html(html_parroquia);
});