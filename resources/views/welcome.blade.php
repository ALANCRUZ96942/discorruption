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
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
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
	    }
    </script>
  
  <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>

    <div class="navb container-fluid m-0 p-0">
        <div class="col-12 pt-4 mb-0 pb-0">
            <div class="row m-0 p-0">
                <div class="col-md-2 col-12" style="text-align: center">
                     <a href="{{ route('inicio') }}" class=" text-muted">
                        <img src="../assets/img/logo.png" class="img-fluid" alt="logo">
                    </a>
                 
                    
                </div>
                <div class="col-md-6 col-12 mt-3">
                    <div class="row">
                        <div class="col" style="text-align: center">
                            <a href="{{ route('login') }}" class=" text-muted">Créditos</a>
                        </div>
                        <div class="col" style="text-align: center">
                            <a href="{{ route('denuncias.index') }}" class=" text-muted">Esadísticas</a>
                        </div>
                        <div class="col" style="text-align: center">
                            <a href="#quienes" class="  text-muted">¿Quiénes somos?</a>
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
                                    <a href="{{ route('login') }}" class="text-muted">Iniciar sesión</a>
        
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="ms-4 text-muted">Registrarse</a>
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
               <button  id="btnDenuncia" type="button" class="shadow btn btn-light" style="border-top-left-radius: 15px;border-bottom-left-radius: 15px">
              <h1 class="p-lg-5 p-md-0 p-5 negrita-h1">Comienza tu denuncia aquí</h1>
               </button>
            </div>
            <div class="row m-0 mt-5 p-0">
                <button type="button" class="shadow btn btn-light" style="border-top-left-radius: 15px;border-bottom-left-radius: 15px">                   
                    <a href="{{route('ver')}}" style="text-decoration: none"> <h1 class="p-lg-5 p-md-0 p-5 negrita-h1">Conoce el estatus de tu denuncia aquí</h1>
                    </a></button>
            </div>
        </div>
    </div>

    <div class="container-fluid fnd">
        <div class="container mt-5 mb-5">
            <div class="card shadow-lg">
                <div class="card-body">
                <div class="row">
                    <div class="col-md-12 col-12 p-5" name="quienes">
                        <a name="quienes" id="quienes"></a> 

                        <h1 style="text-align: center">
                            ¿Quiénes somos?
                        </h1>
                        <h4 class="mt-4"style="text-align: justify; line-height: 25px">
                            El objetivo de este proyecto es contribuir con las autoridades para evitar actos de corrupción. Somos una plataforma que funciona como medio para brindar información asociada al fenómeno de la corrupción, así como recibir denuncias y llevarlas con las autoridades correspondientes. No somos ni tenemos ninguna autoridad para investigar y castigar ninguna clase de conducta que aquí sea denunciada, las autoridades serán las encargadas de darle el seguimiento necesario. Siempre es mejor denunciar directamente en las fiscalías especializadas en delitos de corrupción federales o estatales, pero ofrecemos esta vía confiable, segura, ágil y sencilla para que realices una denuncia efectiva
                        </h4>

                        
                    </div>
                </div>
                </div>
            </div>
    
        </div>
    </div>
    <div class="content has-text-centered">
        <a href="../assets/aviso.pdf" target="_blank"><button class="btn btn-secondary" type="submit" name="submit" style="background-color: #8D99AE">
            Aviso de privacidad completo
        </button></a>
</div>





</body>

<!-- cdn de librería de sweet alert 2 para crear ventanas modales -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    $("#nav-bar").load("shared/navbar2.php");
    $("#lecturas").load("lecturas.php");
    $("#footer").load("shared/footer.php");
    const modal = document.querySelector('.modal');

    $("#btnDenuncia").on("click",function() {

            Swal.fire({
              title: 'Aviso de privacidad',
                text: 'Aviso de privacidad Solo para Incorruptibles del Tecnológico de Monterrey, ubicado en la Vía Atlixcáyotl #5718, en la Reserva Territorial Atlixcáyotl, C.P. 72453, en Puebla, Puebla, es el responsable del uso y protección de sus datos, y al respecto le informa lo siguiente. Los datos personales que usted proporcione a Solo para Incorruptibles serán resguardados, atendiendo a los principios de confidencialidad, consentimiento, disponibilidad, responsabilidad y seguridad; y serán única y exclusivamente utilizados para llevar a cabo la siguiente finalidad: Recabar la información fundamental con el propósito de recibir denuncias y contribuir con las autoridades correspondientes para evitar actos de corrupción. El Aviso Integral de Privacidad lo podrá consultar en el sitio web de Denuncias Solo para Incorruptibles.',
                icon: 'warning',
                showCloseButton: true,
                confirmButtonText: 'Aceptar',
                confirmButtonColor: '#2B2D42'

            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "{{route('denuncias.create')}}";
                }
            })

    });

    $("#aviso").on("click",function() {
modal.classList.add('is-active');
    });
    $("#aceptarAviso").on("click",function() {
modal.classList.remove('is-active');
    });
    $("#eliminar").on("click",function() {
modal.classList.remove('is-active');
    });
</script>
</html>
