@extends('layouts.main')
@section('content')

    <div class="container mt-5">
        <div class="card shadow-lg">
            <div class="card-body">
            <div class="row">
                <div class="col-md-10 col-12">
                    {!! Form::open(['route' =>['denuncias.store'],'files'=> true]) !!}
                        @include('denuncias.partials.form')

                        {!! Form::submit('Crear denuncia', ['class'=>'btn btn-primary']) !!}
                        
                    {!! Form::close() !!}
                </div>
                <div class="col-md-2 col-12 m-0 p-0" style="background-color: #6F83A8 ">
                </div>
            </div>
            </div>
        </div>

    </div>



@endsection

@push('js')
  <script>
      function readImage (input) {
      if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function (e) {
          $('#custom-upload-image').attr('src', e.target.result); // Renderizamos la imagen
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