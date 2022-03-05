@extends('layouts.main')
@section('content')

<div class="input-group">



    <div class="container-fluid fnd">

        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
        <div class="container mt-5 mb-5">
            <div class="card shadow-lg">
                <div class="card-body">
                <div class="row">
                    <div class="col-md-12 col-12 p-5" name="quienes">
                        <a name="quienes" id="quienes"></a> 

                        <h1 style="text-align: center">
                    Muchas gracias, hemos enviado un correo con la información de tu denuncia                 
                     </h1>

   
                    </div>


                </div>

            </div>
    
        </div>
    </div>


</div>


@endsection

@section('js')
    <script> console.log('Hi!'); </script>
@stop