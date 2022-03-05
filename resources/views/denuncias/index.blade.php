@extends('layouts.main')
@section('content')

    <div class="container mt-5">
        <div class="card shadow-lg">
            <div class="card-body">
            <div class="row">
                <div class="col-md-10 col-12">
                    {!! Form::open(['route' =>['denuncias.store'],'files'=> true]) !!}
                    @csrf

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

@section('js')
    <script> console.log('Hi!'); </script>
@stop