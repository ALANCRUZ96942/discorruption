<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito';
            background: #f7fafc;
        }
    </style>
</head>
<body>
    <div class="navb container-fluid m-0 p-0">
        <div class="col-12 pt-4 mb-0 pb-0">
            <div class="row m-0 p-0">
                <div class="col-md-2 col-12" style="text-align: center">
                    <img src="../assets/img/logo.png" class="img-fluid" alt="logo">
                </div>
                <div class="col-md-6 col-12 mt-3">
                    <div class="row">
                        <div class="col" style="text-align: center">
                            <a href="{{ route('login') }}" class=" text-muted">Créditos</a>
                        </div>
                        <div class="col" style="text-align: center">
                            <a href="{{ route('login') }}" class=" text-muted">Esadísticas</a>
                        </div>
                        <div class="col" style="text-align: center">
                            <a href="{{ route('login') }}" class="  text-muted">¿Quiénes somos?</a>
                        </div>
                    
                    </div>
            

               

                    
                </div>
                <div class="col-md-4 col-12 mt-3">
                    <div class="d-flex justify-content-center">
                        @if (Route::has('login'))
                            <div class="">
                                @auth
                                    <a href="{{ url('/dashboard') }}" class="text-muted">Dashboard</a>
                                @else
                                    <a href="{{ route('login') }}" class="text-muted">Log in</a>
        
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="ms-4 text-muted">Register</a>
                                    @endif
                                @endif
                            </div>
                        @endif
                    </div>
                </div>
            </div>

        </div>
    </div>

    <main>
        @yield('content')
    </main>


</body>
</html>
