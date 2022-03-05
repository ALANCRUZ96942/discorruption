
<div class="form-group m-3 p-5">
   <h1 class=" negrita-h1">
    Datos de la denuncia
</h1>
    <div class="row">
        <div class="col-6">

            <div class="m-3">
                {!! Form::label('name', 'Nombre del denunciante (opcional)') !!}
                {!! Form::text('name',null,['class'=>'form-control' . ($errors->has('name') ? ' is-invalid':''),'placeholder'=>'Ingrese su respuesta']) !!}
               @error('name')
                  <span class="invalid-feedback">
                    <strong>
                        {{$message}}
                    </strong>
                </span> 
               @enderror
            </div>

            <div class="m-3">
           {!! Form::label('sexo_id', '¿Podemos saber su sexo? (opcional)') !!}
           <select name="sexo_id" class="form-control" >
               <option value="sexo_id"> -- Seleccione estado --</option>
               @foreach($sexos as $sexos)
                   <option value="{{ $sexos->id }}">
                       {{ $sexos->name }}
                   </option>
               @endforeach
           </select>
        </div>

           <div class="m-3">
           {!! Form::label('escolaridad_id', '¿Cuál es su escolaridad?(opcional)') !!}

           <select name="escolaridad_id" class="form-control" >
              <option value=""> -- Seleccione estado --</option>
              @foreach($escolaridades as $escolaridad)
                  <option value="{{ $escolaridad->id }}">
                      {{ $escolaridad->name }}
                  </option>
              @endforeach
          </select>
</div>

          <div class="m-3">
           {!! Form::label('age', '¿Podemos saber su edad? (opcional)') !!}
           {!! Form::number('age',null,['class'=>'form-control' . ($errors->has('age') ? ' is-invalid':''),'placeholder'=>'Ingrese su respuesta']) !!}
          @error('age')
             <span class="invalid-feedback">
               <strong>
                   {{$message}}
               </strong>
           </span> 
          @enderror
        </div>

          <div class="m-3">
          {!! Form::label('occupation', '¿Cuál es su ocupación? (opcional)') !!}
          {!! Form::text('occupation',null,['class'=>'form-control' . ($errors->has('occupation') ? ' is-invalid':''),'placeholder'=>'Ingrese su respuesta']) !!}
         @error('occupation')
            <span class="invalid-feedback">
              <strong>
                  {{$message}}
              </strong>
          </span> 
         @enderror
        </div>





         
        </div>

     



        
        <div class="col-6">

            <div class="m-3">
               {!! Form::label('date', '¿Cuándo ocurrió?') !!}
               {!! Form::date('date',null,['class'=>'form-control' . ($errors->has('date') ? ' is-invalid':''),'placeholder'=>'Ingrese su respuesta']) !!}
              @error('date')
                 <span class="invalid-feedback">
                   <strong>
                       {{$message}}
                   </strong>
               </span> 
              @enderror
            </div>
    
            <div class="m-3">

                <div class="form-group {{ $errors->has('estado') ? 'error' : ''}}">
                    {!! Form::label('estado', '¿Dónde ocurrió?') !!}
    
                    {!! Form::select('estado_id', isset($estados) ? $estados : array(' ' => ' '), null,['class' =>
                    'form-control form-control-lg'])!!}
                </div>
                 

            </div>


            <div class="m-3">
            {!! Form::label('acto_id', '¿Qué acto de corrupción se cometió? (opcional)') !!}
    
            <select name="acto_id" class="form-control" >
               <option value=""> -- Seleccione el acto de corrupción que se cometió --</option>
               @foreach($actos as $acto)
                   <option value="{{ $acto->id }}">
                       {{ $acto->name }}
                   </option>
               @endforeach
           </select>
          </div>

          <div class="m-3">
             {!! Form::label('name-d', '¿Quién lo cometió? (opcional)') !!}
             {!! Form::text('name-d',null,['class'=>'form-control' . ($errors->has('name-d') ? ' is-invalid':''),'placeholder'=>'Ingrese su respuesta']) !!}
            @error('name-d')
               <span class="invalid-feedback">
                 <strong>
                     {{$message}}
                 </strong>
             </span> 
            @enderror
        </div>


        <div class="m-3">
            {!! Form::label('description', '¿Qué y cómo sucedió?') !!}
            {!! Form::text('description',null,['class'=>'form-control' . ($errors->has('suceso') ? ' is-invalid':''),'placeholder'=>'Ingrese su respuesta']) !!}
           @error('description')
              <span class="invalid-feedback">
                <strong>
                    {{$message}}
                </strong>
            </span> 
           @enderror
        </div>


        <div class="m-3">
            <div class="form-group {{ $errors->has('imagen') ? 'has-error' : ''}}">
                {!! Form::label('imagen', 'Evidencias', ['class' => 'control-label']) !!}
        
                    <div class="custom-upload-image">
        
                        <label class="panda-btn btn btn-outline-dark rounded-0 w-100 browse">
                        Seleccionar<input id="browse" type="file" name="imagen" class="d-none">
                        </label>        
                    </div>
            </div>
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


