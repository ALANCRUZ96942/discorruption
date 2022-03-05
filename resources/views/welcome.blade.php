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
    <script>
	    var botmanWidget = {
           
    title:'Somos Incorruptibles',
    introMessage: "✋ Hola, ¿Qué quieres hacer hacer?"
    mainColor:'#c02026',
    aboutText:'',
    bubbleBackground:'#c02026',
    headerTextColor: '#fff',
	    };
    </script>
  
    <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>
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

    <div class="contenedor container-fluid m-0 p-0" >
        <img class="img-fluid w-100"src="../assets/img/fondo.png" alt="">
        <div class="col-md-4 col-12 mb-3 mt-3 p-md-0 p-3 botones">
            <div class="row m-0 mb-0 p-0">
               <button type="button" class="shadow btn btn-light" style="border-top-left-radius: 15px;border-bottom-left-radius: 15px">
                <a href="{{route('denuncias.index')}}" style="text-decoration: none"><h1 class="p-lg-5 p-md-0 p-5 negrita-h1">Comienza tu denuncia aquí</h1>
                </a></button>
            </div>
            <div class="row m-0 mt-5 p-0">
                <button type="button" class="shadow btn btn-light" style="border-top-left-radius: 15px;border-bottom-left-radius: 15px">                   
                    <a href="{{route('denuncias.index')}}" style="text-decoration: none"> <h1 class="p-lg-5 p-md-0 p-5 negrita-h1">Conoce el estatus de tu denuncia aquí</h1>
                    </a></button>
            </div>
        </div>
    </div>

    <div class="container-fluid fnd">
        <div class="col">
            <h5>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel laborum optio iste soluta beatae ratione quos dolores cupiditate placeat laudantium similique error delectus non asperiores qui cumque quae, alias quisquam?</h5>
        </div>
        <div class="col">
            <h5>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel laborum optio iste soluta beatae ratione quos dolores cupiditate placeat laudantium similique error delectus non asperiores qui cumque quae, alias quisquam?</h5>
        </div>
        <div class="col">
            <h5>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel laborum optio iste soluta beatae ratione quos dolores cupiditate placeat laudantium similique error delectus non asperiores qui cumque quae, alias quisquam?</h5>
        </div>
        <div class="col">
            <h5>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel laborum optio iste soluta beatae ratione quos dolores cupiditate placeat laudantium similique error delectus non asperiores qui cumque quae, alias quisquam?</h5>
        </div>
        <div class="col">
            <h5>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel laborum optio iste soluta beatae ratione quos dolores cupiditate placeat laudantium similique error delectus non asperiores qui cumque quae, alias quisquam?</h5>
        </div>
        <div class="col">
            <h5>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel laborum optio iste soluta beatae ratione quos dolores cupiditate placeat laudantium similique error delectus non asperiores qui cumque quae, alias quisquam?</h5>
        </div>
        <div class="col">
            <h5>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel laborum optio iste soluta beatae ratione quos dolores cupiditate placeat laudantium similique error delectus non asperiores qui cumque quae, alias quisquam?</h5>
        </div>
        <div class="col">
            <h5>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel laborum optio iste soluta beatae ratione quos dolores cupiditate placeat laudantium similique error delectus non asperiores qui cumque quae, alias quisquam?</h5>
        </div>
        <div class="col">
            <h5>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel laborum optio iste soluta beatae ratione quos dolores cupiditate placeat laudantium similique error delectus non asperiores qui cumque quae, alias quisquam?</h5>
        </div>
        <div class="col">
            <h5>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel laborum optio iste soluta beatae ratione quos dolores cupiditate placeat laudantium similique error delectus non asperiores qui cumque quae, alias quisquam?</h5>
        </div>
        <div class="col">
            <h5>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel laborum optio iste soluta beatae ratione quos dolores cupiditate placeat laudantium similique error delectus non asperiores qui cumque quae, alias quisquam?</h5>
        </div>
        <div class="col">
            <h5>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel laborum optio iste soluta beatae ratione quos dolores cupiditate placeat laudantium similique error delectus non asperiores qui cumque quae, alias quisquam?</h5>
        </div>
        <div class="col">
            <h5>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel laborum optio iste soluta beatae ratione quos dolores cupiditate placeat laudantium similique error delectus non asperiores qui cumque quae, alias quisquam?</h5>
        </div>
        <div class="col">
            <h5>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel laborum optio iste soluta beatae ratione quos dolores cupiditate placeat laudantium similique error delectus non asperiores qui cumque quae, alias quisquam?</h5>
        </div>
                <div class="col">
            <h5>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel laborum optio iste soluta beatae ratione quos dolores cupiditate placeat laudantium similique error delectus non asperiores qui cumque quae, alias quisquam?</h5>
        </div>
        <div class="col">
            <h5>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel laborum optio iste soluta beatae ratione quos dolores cupiditate placeat laudantium similique error delectus non asperiores qui cumque quae, alias quisquam?</h5>
        </div>
                <div class="col">
            <h5>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel laborum optio iste soluta beatae ratione quos dolores cupiditate placeat laudantium similique error delectus non asperiores qui cumque quae, alias quisquam?</h5>
        </div>
        <div class="col">
            <h5>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel laborum optio iste soluta beatae ratione quos dolores cupiditate placeat laudantium similique error delectus non asperiores qui cumque quae, alias quisquam?</h5>
        </div>
        <div class="col">
            <h5>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel laborum optio iste soluta beatae ratione quos dolores cupiditate placeat laudantium similique error delectus non asperiores qui cumque quae, alias quisquam?</h5>
        </div>
        <div class="col">
            <h5>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel laborum optio iste soluta beatae ratione quos dolores cupiditate placeat laudantium similique error delectus non asperiores qui cumque quae, alias quisquam?</h5>
        </div>
                <div class="col">
            <h5>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel laborum optio iste soluta beatae ratione quos dolores cupiditate placeat laudantium similique error delectus non asperiores qui cumque quae, alias quisquam?</h5>
        </div>
        <div class="col">
            <h5>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel laborum optio iste soluta beatae ratione quos dolores cupiditate placeat laudantium similique error delectus non asperiores qui cumque quae, alias quisquam?</h5>
        </div>
        <div class="col">
            <h5>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel laborum optio iste soluta beatae ratione quos dolores cupiditate placeat laudantium similique error delectus non asperiores qui cumque quae, alias quisquam?</h5>
        </div>
        <div class="col">
            <h5>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel laborum optio iste soluta beatae ratione quos dolores cupiditate placeat laudantium similique error delectus non asperiores qui cumque quae, alias quisquam?</h5>
        </div>
                <div class="col">
            <h5>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel laborum optio iste soluta beatae ratione quos dolores cupiditate placeat laudantium similique error delectus non asperiores qui cumque quae, alias quisquam?</h5>
        </div>
        <div class="col">
            <h5>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel laborum optio iste soluta beatae ratione quos dolores cupiditate placeat laudantium similique error delectus non asperiores qui cumque quae, alias quisquam?</h5>
        </div>
        <div class="col">
            <h5>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel laborum optio iste soluta beatae ratione quos dolores cupiditate placeat laudantium similique error delectus non asperiores qui cumque quae, alias quisquam?</h5>
        </div>
        <div class="col">
            <h5>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel laborum optio iste soluta beatae ratione quos dolores cupiditate placeat laudantium similique error delectus non asperiores qui cumque quae, alias quisquam?</h5>
        </div>
        <div class="col">
            <h5>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel laborum optio iste soluta beatae ratione quos dolores cupiditate placeat laudantium similique error delectus non asperiores qui cumque quae, alias quisquam?</h5>
        </div>
        <div class="col">
            <h5>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel laborum optio iste soluta beatae ratione quos dolores cupiditate placeat laudantium similique error delectus non asperiores qui cumque quae, alias quisquam?</h5>
        </div>
        <div class="col">
            <h5>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel laborum optio iste soluta beatae ratione quos dolores cupiditate placeat laudantium similique error delectus non asperiores qui cumque quae, alias quisquam?</h5>
        </div>
        <div class="col">
            <h5>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel laborum optio iste soluta beatae ratione quos dolores cupiditate placeat laudantium similique error delectus non asperiores qui cumque quae, alias quisquam?</h5>
        </div>
        <div class="col">
            <h5>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel laborum optio iste soluta beatae ratione quos dolores cupiditate placeat laudantium similique error delectus non asperiores qui cumque quae, alias quisquam?</h5>
        </div>
        <div class="col">
            <h5>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel laborum optio iste soluta beatae ratione quos dolores cupiditate placeat laudantium similique error delectus non asperiores qui cumque quae, alias quisquam?</h5>
        </div>
        <div class="col">
            <h5>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel laborum optio iste soluta beatae ratione quos dolores cupiditate placeat laudantium similique error delectus non asperiores qui cumque quae, alias quisquam?</h5>
        </div>
        <div class="col">
            <h5>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel laborum optio iste soluta beatae ratione quos dolores cupiditate placeat laudantium similique error delectus non asperiores qui cumque quae, alias quisquam?</h5>
        </div>
        <div class="col">
            <h5>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel laborum optio iste soluta beatae ratione quos dolores cupiditate placeat laudantium similique error delectus non asperiores qui cumque quae, alias quisquam?</h5>
        </div>
        <div class="col">
            <h5>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel laborum optio iste soluta beatae ratione quos dolores cupiditate placeat laudantium similique error delectus non asperiores qui cumque quae, alias quisquam?</h5>
        </div>
                <div class="col">
            <h5>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel laborum optio iste soluta beatae ratione quos dolores cupiditate placeat laudantium similique error delectus non asperiores qui cumque quae, alias quisquam?</h5>
        </div>
                <div class="col">
            <h5>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel laborum optio iste soluta beatae ratione quos dolores cupiditate placeat laudantium similique error delectus non asperiores qui cumque quae, alias quisquam?</h5>
        </div>
                <div class="col">
            <h5>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel laborum optio iste soluta beatae ratione quos dolores cupiditate placeat laudantium similique error delectus non asperiores qui cumque quae, alias quisquam?</h5>
        </div>
                <div class="col">
            <h5>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel laborum optio iste soluta beatae ratione quos dolores cupiditate placeat laudantium similique error delectus non asperiores qui cumque quae, alias quisquam?</h5>
        </div>
                <div class="col">
            <h5>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel laborum optio iste soluta beatae ratione quos dolores cupiditate placeat laudantium similique error delectus non asperiores qui cumque quae, alias quisquam?</h5>
        </div>
                <div class="col">
            <h5>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel laborum optio iste soluta beatae ratione quos dolores cupiditate placeat laudantium similique error delectus non asperiores qui cumque quae, alias quisquam?</h5>
        </div>
        
        
    </div>


</body>
</html>
