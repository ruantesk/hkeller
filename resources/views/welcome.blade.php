<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <title>HKeller</title>

        <!-- Styles -->
        <style>
            .center-screen {
              position: absolute;
              justify-content: center;
              align-items: center;
              text-align: center;
              min-height: 500px;
              min-width: 612px;
              background-color: #5e7c12;
              top: 10%;
            }
            .background {
                background-color: #184232;
                min-height: 100%;
                height: 100%;
                margin: 0;
                align-items: center;
                justify-content: center;
                display: flex;
            }

            .acess {
                text-align: right;
                display: flex;
                justify-content: end;
            }

            .text-login {
              background-color: green;
              color: white;
              padding: 1em 1.5em;
              text-decoration: none;
              text-transform: uppercase;
            }

            .social-media{
                vertical-align: bottom;
                text-align: left;
                position: absolute;
                bottom: 10px;
            }

        </style>
    </head>
    <body class="background">
            @if (Route::has('login'))
                <div class="center-screen w-full sm:max-w-md mt-6 px-6 py-4 shadow-md overflow-hidden sm:rounded-lg">
                    <div>
                    <img class="sm:rounded-lg" src="https://caoguia.org.br/wp-content/uploads/2022/07/LOGO-HELLEN-KELLER-22-Anos-e-INTERNATIONAL-GUIDE-DOG-FEDERATION.png">
                    </div>
                    <div class="acess">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-login sm:rounded-lg">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-login sm:rounded-lg mr-2">Entrar</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="text-login sm:rounded-lg ml-2">Cadastrar</a>
                        @endif
                    @endauth
                    </div>
                    <div class="social-media">
                        <a href="https://www.instagram.com/caoguia.org.br/"><img src="{{ asset('images/insta.png') }}" style="width:30px;height:30px;" alt="Instagram"></a>
                    </div>
                </div>
            @endif
    </body>
</html>
