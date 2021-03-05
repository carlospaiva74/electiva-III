<div class="row">

	<div class="col-md-6">
		<h6>Nombre <strong class="text-danger">*</strong></h6>
		<input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{old('nombre')}}" placeholder="Ingrese el primer nombre del usuario" required='required' maxlength="60">
		@error('nombre')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
		<br>
	</div>

	<div class="col-md-6">
		<h6>Número de teléfono <strong class="text-danger">*</strong></h6>
		<input type="number" name="telefono" class="form-control @error('telefono') is-invalid @enderror" placeholder="Ingrese el número de teléfono del usuario" value="{{old('telefono')}}" required="required">
		@error('telefono')
			<span class="invalid-feedback" role="alert">
	            <strong>{{ $message }}</strong>
	        </span>
		@enderror
		<br>
	</div>

	<div class="col-md-6">
		<h6>Estado <strong class="text-danger">*</strong></h6>
		<select class="form-control @error('estado') is-invalid @enderror" name="estado" required="required" id="estado">
			<option value="">Seleccione una opción</option>
			@foreach($estados as $key)
				<option value="{{$key->id}}" 
					<?php if(old('estado') == $key->id){echo 'selected="selected"';} ?> >
					{{$key->estado}}
				</option>
			@endforeach
		</select>
		@error('estado')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
		<br>
	</div>

	<div class="col-md-6">
		<h6>Municipio <strong class="text-danger">*</strong></h6>
		<select class="form-control @error('municipio') is-invalid @enderror" name="municipio"  id="municipio" required="required">
			<option value="">Seleccione una opción</option>
			@if(old('estado')!='')
				<?php $municipios = $estados->where('id',old('estado'))->first()->municipios; ?>
				@foreach($municipios as $key)
					<option value="{{$key->id}}" 
						<?php if(old('municipio') == $key->id){echo 'selected="selected"';} ?> >
						{{$key->municipio}}
					</option>
				@endforeach
			@endif
		</select>
		@error('municipio')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
		<br>
	</div>
	<div class="col-md-6">
		<h6>Parroquia <strong class="text-danger">*</strong></h6>
		<select class="form-control @error('parroquia') is-invalid @enderror" name="parroquia" id="parroquia" required="required">
			<option value="">Seleccione una opción</option>
			@if(old('municipio')!='')
				@foreach($municipios->where('id',old('municipio'))->first()->parroquias as $key)
					<option value="{{$key->id}}" 
						<?php if(old('parroquia') == $key->id){echo 'selected="selected"';} ?> >
						{{$key->parroquia}}
					</option>
				@endforeach
			@endif
		</select>
		@error('parroquia')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
		<br>
	</div>

	<div class="col-md-6">
		<h6>Dirección <strong class="text-danger">*</strong></h6>
		<input type="text" name="direccion" class="form-control @error('direccion') is-invalid @enderror" placeholder="Ingrese la dirección" maxlength="255" value="{{old('direccion')}}" required="required">
		@error('direccion')
			 <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
		@enderror
		<br>
	</div>
</div>