
<div class="form-group">

    <div class="row">
        <div class="col-6">
            {!! Form::label('name', 'Nombre') !!}
            {!! Form::text('name',null,['class'=>'form-control' . ($errors->has('name') ? ' is-invalid':''),'placeholder'=>'Escriba el nombre del banner']) !!}
           @error('name')
              <span class="invalid-feedback">
                <strong>
                    {{$message}}
                </strong>
            </span> 
           @enderror

           {!! Form::label('date', '¿Cuándo ocurrió?') !!}
           {!! Form::date('date',null,['class'=>'form-control' . ($errors->has('date') ? ' is-invalid':''),'placeholder'=>'Escriba el nombre del banner']) !!}
          @error('date')
             <span class="invalid-feedback">
               <strong>
                   {{$message}}
               </strong>
           </span> 
          @enderror

          {!! Form::label('place', '¿Dónde ocurrió?') !!}
          {!! Form::text('place',null,['class'=>'form-control' . ($errors->has('place') ? ' is-invalid':''),'placeholder'=>'Escriba el nombre del banner']) !!}
         @error('place')
            <span class="invalid-feedback">
              <strong>
                  {{$message}}
              </strong>
          </span> 
         @enderror

         {!! Form::label('name-d', '¿Quién lo cometió?') !!}
         {!! Form::text('name-d',null,['class'=>'form-control' . ($errors->has('name-d') ? ' is-invalid':''),'placeholder'=>'Escriba el nombre del banner']) !!}
        @error('name-d')
           <span class="invalid-feedback">
             <strong>
                 {{$message}}
             </strong>
         </span> 
        @enderror



        </div>
        <div class="col-6">
            <div class="form-group {{ $errors->has('imagen') ? 'has-error' : ''}}">
                {!! Form::label('imagen', 'Evidencias', ['class' => 'control-label']) !!}
        
                    <div class="custom-upload-image">
        
                        <img id="custom-upload-image" class="img-fluid w-100 mb-3 border" 
                        src="" alt="Tu imagen" />
        
                        <label class="panda-btn btn btn-outline-dark rounded-0 w-100 browse">
                        Seleccionar<input id="browse" type="file" name="imagen" class="d-none">
                        </label>        
                    </div>
            </div>

            {!! Form::label('sex', '¿Podemos saber su sexo?') !!}
            {!! Form::text('sex',null,['class'=>'form-control' . ($errors->has('sex') ? ' is-invalid':''),'placeholder'=>'Escriba el nombre del banner']) !!}
           @error('sex')
              <span class="invalid-feedback">
                <strong>
                    {{$message}}
                </strong>
            </span> 
           @enderror

           {!! Form::label('age', '¿Podemos saber su edad?') !!}
           {!! Form::text('age',null,['class'=>'form-control' . ($errors->has('age') ? ' is-invalid':''),'placeholder'=>'Escriba el nombre del banner']) !!}
          @error('age')
             <span class="invalid-feedback">
               <strong>
                   {{$message}}
               </strong>
           </span> 
          @enderror

          {!! Form::label('occupation', '¿Cuál es su ocupación?') !!}
          {!! Form::text('occupation',null,['class'=>'form-control' . ($errors->has('occupation') ? ' is-invalid':''),'placeholder'=>'Escriba el nombre del banner']) !!}
         @error('occupation')
            <span class="invalid-feedback">
              <strong>
                  {{$message}}
              </strong>
          </span> 
         @enderror
        </div>
    </div>



   


        <div class="col-12 m-3">
            @error('denuncias')
                <small class="text-danger">
                <strong>
                    {{$message}}
                </strong>
            </small> 
            @enderror
        </div>
</div>



@push('js')
  <script>
      function readImage (input) {
      if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function (e) {
          $('#custom-upload-image').attr('src', e.target.result); // Renderizamos la imagen
         console.log("fin");
      }
      reader.readAsDataURL(input.files[0]);
      }
  }

  $("#browse").change(function () {
      // Código a ejecutar cuando se detecta un cambio de archivO
      readImage(this);
  });
  </script>    
@endpush