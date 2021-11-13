<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Directory QR</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <style>
            body {
                font-family: 'Nunito', sans-serif;
                background-size: cover;
                background-image: url(images/logos/DIRECTORIO-QR.jpeg);
                background-position: center center;
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;
                background-color: #66999;
            }

        </style>
    </head>
    <body class="antialiased">
        
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 sm:items-center py-4 sm:pt-0">
           
            
            <div class="container">
            
               <div class="row align-items-center">
                    <div class="col-md-10">
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <a type="button" href="{{ route('directory') }}" class="btn btn-primary">Directorio</a>
                            @auth
                                <a type="button" class="btn btn-warning" href="{{ route('profile') }}">Perfil</a>
                            @else
                                <a type="button" href="{{ route('login') }}" class="btn btn-danger">Ingreso</a>
                                <a type="button" href="{{ route('register') }}" class="btn btn-warning">Registro</a> 
                            @endauth
                        </div>
                    </div>
                    <div class="col-md-2">
    
                        <div class="card bg-dark text-white">
                            <img src="{{ asset('images/logos/pauta_1.png') }}" class="card-img-top img-responsive" alt="publicidad">
                            <div class="card-body">
                                <h5 class="card-title"><small>Publicidad</small></h5>
                                <p class="card-text"><small>Espacio publicitario</small></p>
                            </div>
                        </div>
                        <br>
                    <div class="card bg-dark text-white">
                            <img src="{{ asset('images/logos/pauta_2.png') }}" class="card-img-top img-responsive" alt="publicidad">
                            <div class="card-body">
                                <h5 class="card-title"><small>Publicidad</small></h5>
                                <p class="card-text"><small>Espacio publicitario</small></p>
                            </div>
                        </div>
                </div>

            </div>
        </div>
    </body>
</html>
