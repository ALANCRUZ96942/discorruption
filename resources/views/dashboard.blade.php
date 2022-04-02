@extends('layouts.main')
@section('content')
<script src="{{ mix('js/app.js') }}" defer></script>

<x-jet-banner />
@livewire('navigation-menu')
    <div class="container mt-5">
        <div class="card shadow-lg">
            <div class="card-body">
            <div class="row">
               
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                        
										<th>id</th>
										<th>Fecha</th>
										<th>Nombre</th>
										<th>Descrpcion</th>
										<th>Edad</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($denuncias as $denuncia)
                                        <tr>
                                            <td>{{$denuncia->id }}</td>
                                            
											<td>{{ $denuncia->date }}</td>
                                            <td>{{ $denuncia->name }}</td>
                                            <td>{{ $denuncia->description }}</td>
                                            <td>{{ $denuncia->estado->name }}</td>
                                            <td>{{ $denuncia->acto->name }}</td>
                                            <td>{{ $denuncia->acto->name }}</td>
                                            <td>

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
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