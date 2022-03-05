@extends('layouts.main')
@section('content')

<div class="input-group">



    <div class="container-fluid fnd">
        <div class="container mt-5 mb-5">
            <div class="card shadow-lg">
                <div class="card-body">
                <div class="row">
                    <div class="col-md-12 col-12 p-5" name="quienes">
                        <a name="quienes" id="quienes"></a> 

                        <h1 style="text-align: center">
                            Ingresa tu correo y folio
                        </h1>

   
                    </div>


                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                          <span class="input-group-text" id="basic-addon2">Folio</span>
                        </div>
                      </div>


                      <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                          <span class="input-group-text" id="basic-addon2">Correo</span>
                        </div>
                      </div>
                </div>
                </div>

                <button type="button" class="shadow btn btn-light" style="border-top-left-radius: 15px;border-bottom-left-radius: 15px">                   
                    <a href="{{route('fin')}}" style="text-decoration: none"> <h1 class="p-lg-5 p-md-0 p-5 negrita-h1">Enviar</h1>
                </a></button>
            </div>
    
        </div>
    </div>


</div>


@endsection

@section('js')
    <script> console.log('Hi!'); </script>
@stop