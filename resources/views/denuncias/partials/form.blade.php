<link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />
<script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>

<div class="form-group m-3 p-5">
   <h1 class=" negrita-h1">
    Datos de la denuncia
</h1>
    <div class="row">
        <div class="col-12 col-md-6">

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

           {!! Form::select('sexo_id', isset($sexos) ? $sexos : array(' ' => ' '), null,['class' =>
           'form-control'])!!}
        </div>

           <div class="m-3">
           {!! Form::label('escolaridad_id', '¿Cuál es su escolaridad?(opcional)') !!}

           {!! Form::select('escolaridad_id', isset($escolaridades) ? $escolaridades : array(' ' => ' '), null,['class' =>
           'form-control'])!!}
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

     



        
        <div class="col-12 col-md-6">

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
                    'form-control '])!!}
                </div>
                 

            </div>


            <div class="m-3">
            {!! Form::label('acto_id', '¿Qué acto de corrupción se cometió? (opcional)') !!}
    
            {!! Form::select('acto_id', isset($actos) ? $actos : array(' ' => ' '), null,['class' =>
            'form-control '])!!}
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
            {!! Form::text('description',null,['class'=>'form-control' . ($errors->has('description') ? ' is-invalid':''),'placeholder'=>'Ingrese su respuesta']) !!}
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
                {!! Form::file('imagen',null,['class'=>'custom-input-file' . ($errors->has('image') ? ' is-invalid':''),'placeholder'=>'Ingrese su respuesta']) !!}
    
                    {!! $errors->first('imagen', '<p class="help-block">:message</p>') !!}

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




