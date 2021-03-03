<div class="row">
    <div class="col-md-6">
        <h6>Producto <strong class="text-danger">*</strong></h6>
        <input type="text" name="producto" class="form-control @error('producto') is-invalid @enderror"
            placeholder="Nombre del producto" 
            maxlength="60" 
            required="required" 
            value="{{old('producto')}}" 
        >
        @error('producto')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <br>
    </div>

    <div class="col-md-6">
        <h6>Categoría</h6>
        <select class="form-control @error('categoria') is-invalid @enderror" name="categoria">
            <option value="">Selecciona una opción</option>
            @foreach($categorias as $key)
                <option value="{{$key->id}}"
                    <?php if(old('categoria') == $key->id){echo 'selected="selected"';} ?>
                    > {{$key->nombre}}
                </option>
            @endforeach
        </select>
    </div>      

    <div class="col-md-6">
        <h6> Precio <strong class="text-danger">*</strong></h6>
        <input type="number" name="precio" step="0.01" class="form-control @error('precio') is-invalid @enderror" required="required" value="{{old('precio')}}" placeholder="Ej. 50" min="0.01">
        @error('precio')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <br>
    </div>   

    <div class="col-md-6">
        <h6>Stock <strong class="text-danger">*</strong></h6>
        <input type="number" name="stock" class="form-control @error('stock') is-invalid @enderror" value="{{old('stock')}}" placeholder="Ej. 80" required="required" min="1">
            @error('stock')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        <br>
    </div>

    <div class="col-md-12">
        
        <div class="row img-color-div" id="img-color-null">
            <div class="col-md-12">
                <p class="mt-2 ml-1" style="display: inline-block;"><strong>Fotos</strong></p>
            </div>
            <div class="row m-3">
                <?php $j=10; ?>
                @if(old('foto')!='')
                    @foreach(old('foto') as $key)
                        <?php $code = generar_code($j); ?>
                        <div class="col-md-3" id="div-foto-{{$code}}">
                            <div class='imgPreview' id="imgPreview-{{$code}}">
                                <img src="{{asset($key)}}">
                            </div>
                            <br>
                            <div> <center> <button type="button" class="btn btn-outline-danger" style="display:block;" id="eliminar-{{$code}}" onclick="delete_foto('<?php echo $code; ?>')">Eliminar</button>  </center> 
                                <input type="hidden" id="id_img-{{$code}}" name="foto[]" value="{{$key}}">
                            </div>
                        </div>
                        <?php $j++; ?>
                    @endforeach
                @endif  

                <div id="imgPreview" class="col-12"></div>
            </div>
            <div class="col-md-12">
                <br>
                <div class="cz-file-drop-area">
                    <div class="cz-file-drop-icon czi-cloud-upload"></div>
                    <span class="cz-file-drop-message">
                        Arrastra y suelta aquí para subir una foto</span>
                        <input type="file" accept="image/x-png,image/jpeg" class="cz-file-drop-input input-foto"
                            multiple="multiple">
                </div>
            </div>
            <div class="col-md-12">
                <div id="img-db"></div>
                <hr>
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <h6>Descripción</h6>
        <textarea class="form-control" name="descripcion" id="descripcion" placeholder="Descripción">{!!old('descripcion')!!}</textarea>
        <br>
    </div>
</div>