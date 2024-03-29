<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Evaluación Docente por parte de Jefaturas</title>

        

        

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
         <!-- Scripts -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
           <!--  <script src="{{ asset('js/app.js') }}" defer></script> -->

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- Select 2 -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />

        

        

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }
            .full-height2 {
                height: 80vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }
            .subtitle {
                font-size: 64px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .clickeable {
                cursor: pointer;
            }

            .confondo {
                 background-image: url("https://i0.wp.com/ux.edu.mx/wp-content/uploads/cintillo-final.jpg");
                  background-repeat: no-repeat;
                  background-attachment: fixed;
                  background-position: center; 
                
            }

            .footer {
              width: 100%;
              height: 10vh;
            }

            .navbarh {
                height: 10vh;
            }

            .ocultar {
                display: none;
            }
            
        </style>
    </head>
    <body>
        <!-- comienza etapa 1, presentación -->
        <div class="flex-center position-ref full-height" id="vista1">

            <div class="content">

                <div>
                    <img src="https://i0.wp.com/ux.edu.mx/wp-content/uploads/207x140-blanco-3.png">
                </div>
                <div class="title m-b-md">
                    Evaluación docente por jefaturas
                    <div class="subtitle">
                    Universidad de Xalapa
                    </div>
                </div>
                <div class="links clickeable">
                    <a id="comenzar">Comenzar</a>
                </div>

            </div>
    
        </div>
         <!-- finaliza etapa 1, presentación -->
         
            <!-- comienza etapa 2, contenido principal -->
        <div class="container-flex ocultar" id="vista2">
            <nav class="navbar navbarh navbar-expand-lg navbar-light bg-light" id="navbar-principal">
                <ul class="navbar-nav mr-auto"> 
                     <li class="nav-item active">
                    <img src="https://i0.wp.com/ux.edu.mx/wp-content/uploads/207x140-blanco-3.png" width="30" height="30" class="d-inline-block mt-2" alt="">
                  </li> 
                </ul>
                
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <h4>Universidad Xalapa</h4>
              </button>
              <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto pr-4">
                    <li>Universidad Xalapa</li>
                </ul>
                <span class="navbar-text">
                  Proyecto de inversión
                </span>
              </div>
            </nav>

            <div class="flex-center position-ref full-height2 confondo" id="contenedor-seleccionar">
                <div class="content"> 
                    <div class="card">
                      <div class="card-header">
                        <h3>Evaluación integral docente por parte de jefaturas</h3>
                      </div>
                      <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6 col-md-6">
                                
                                    <h3>Elija su jefatura</h3><br>
                                   <div class="mt-2">
                                       <select class="form-control selecttest">
                                      <option selected="selected">Ingresa:</option>
                                      <option>ADMINISTRACIÓN DE EMPRESAS</option>
                                      <option>CIENCIAS DE LA EDUCACIÓN</option>
                                      <option>CIENCIAS Y TECNICAS DE LA COMUNICACIÓN</option>
                                      <option>DERECHO</option>
                                      <option>INGENIERÍA MECATRONICA</option>
                                      <option>NEGOCIOS INTERNACIONALES</option>
                                      <option>MERCADOTECNIA</option>
                                      <option>PSICOLOGÍA</option>
                                    </select>
                                   </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                
                                   <h3>Seleccione Docente</h3>
                                   <div>
                                       <select class="form-control selecttest2">
                                      <option selected="selected">Ingresa aquí tu carrera:</option>
                                      <option>ADMINISTRACIÓN DE EMPRESAS</option>
                                      <option>CIENCIAS DE LA EDUCACIÓN</option>
                                      <option>CIENCIAS Y TECNICAS DE LA COMUNICACIÓN</option>
                                      <option>DERECHO</option>
                                      <option>INGENIERÍA MECATRONICA</option>
                                      <option>NEGOCIOS INTERNACIONALES</option>
                                      <option>MERCADOTECNIA</option>
                                      <option>PSICOLOGÍA</option>
                                    </select>
                                   </div>
                              
                            </div>
                        </div>
                        <hr><br>
                        <div class="row">
                           <div class="col-12">
                               <center>
                               <button type="button" class="btn btn-primary">Comenzar evaluación</button>
                           </center>
                           </div>
                        </div>
                        
                      </div>
                    </div>
                </div>
            </div>   
        </div>
        <footer class="footer bg-light ocultar" id="footer">
  <div class="container text-white">
    <br>
    <div class="row">
      <div class="col-12">
        <h4 class="text-dark">©Diseño y evaluacion de proyectos</h4>
      </div>
    </div>
  </div>
</footer>

         
            <!-- finaliza etapa 2, contenido principal -->

        
        

        <script>
            $(document).ready(function() {
                $('.selecttest').select2();
                $('.selecttest2').select2();
            });

            function ocultarPresentacion() {
                $("#vista1").fadeOut(1500, function(){
                  console.log("ocultando vista 1");
                });
            }

            function mostrarVista2() {
                $("#vista2").fadeIn(3000, function(){
                    $("#footer").fadeIn(0);
                  console.log("mostrando vista 2");
                });
            }

            $( "#comenzar" ).click(function() {
              ocultarPresentacion()
              mostrarVista2()
            });
        </script>
    </body>
    
</html>
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
