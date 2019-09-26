@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                </div>

                <!DOCTYPE html>
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
                                        <a href="{{ url('/home') }}"></a>
                                    @else
                                        <a href="{{ route('login') }}">Se connecter</a>

                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}"></a>
                                        @endif
                                    @endauth
                                </div>
                            @endif

                            <div class="content">
                                <div class="title m-b-md">
                                    APESUP gestion des membres
                                </div>

                                <div class="links">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Accueil</a>
                                    <a href="#">Ajouter membre</a>
                                    <a href="#">Supprimer membre</a>
                                    <a href="#"></a>
                                    <a href="#"></a>
                                </div>
                            </div>
                        </div>
                    </body>
                </html>


            </div>
        </div>
    </div>
</div>
@endsection
