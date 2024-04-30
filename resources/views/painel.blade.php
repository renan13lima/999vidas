@extends('adminlte::page')

@section('content')
    <div class="container">

        <!doctype html>
        <html lang="pt-BR">

        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <title></title>

            <!-- Bootstrap CSS -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

            <!-- Bootstrap ICONS -->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

            <!-- Custom CSS -->
            <link href="#" rel="stylesheet" type="text/css" media="all">

            <style>
                @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');

                * {
                    margin: 0;
                    padding: 0;
                    box-sizing: border-box;
                    font-family: 'Poppins', sans-serif;
                }

                body {
                    background: #F3F3F5;
                }

                .card {
                    box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
                }

                .card-header {
                    background: rgb(247, 246, 240);
                    color: #604b32
                }

                .nav-tabs a {
                    color: #161616;
                }

                .perfilUser {
                    margin: 10px 0px;
                }

                .perfilUser img {
                    width: 45px;
                    height: 45px;
                    border-radius: 50%;
                }

                .userPost {
                    margin-left: 10px;
                    font-size: 12px;
                }

                .userPost span {
                    color: gray;
                }

                .userName {
                    font-weight: bold;
                }
            </style>

        </head>

        <body>

            @can('is_admin')
                <div class="alert alert-success" role="alert">
                    Você é um administrador!
                </div>
            @else
                <div class="alert alert-success" role="alert">
                    Você é um usuário normal!
                </div>
            @endcan



            <main id="main" class="mt-5">
                <ul class="nav nav-tabs justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Global</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Seguindo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Favoritos</a>
                    </li>
                </ul>

                <div class="container-fluid">
                    <div class="row">
                        @foreach ($postagens as $value)
                            <div class="mx-auto col-10 my-3">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="mb-0 card-title">{{ $value->titulo }}</h5>
                                    </div>

                                    <div class="card-body">
                                        <div class="perfilUser d-flex align-items-center">
                                            <img src="https://i.pinimg.com/550x/da/ba/b8/dabab85a04f90e5e4071c906611c7271.jpg"
                                                class="img-fluid" alt="...">
                                            <div class="userPost">
                                                <div class="userName">{{ $value->user->name }}</div>
                                                <p><time class="published">{{ \Carbon\Carbon::parse($value->created_at)->diffForHumans(); }}</time></p>
                                            </div>
                                        </div>
                                        {!! $value->conteudo !!}
                                    </div> <!-- Fechando CARD BODY -->

                                    <div class="card-footer bg-transparent d-flex">
                                        <time class="published">{{ \Carbon\Carbon::parse($value->created_at)->format('d/m/Y') }}</time>
                                        <div class="ms-auto">
                                            <a href="{{ url('/blog/curtida/' . $value->id) }}"><i class="bi bi-heart"></i></a>
                                            {{ $value->curtidas->count() }}
                                            <a href="{{ url('/blog/postagem/' . $value->id) }}"><i class="bi bi-chat"></i></a>
                                            {{ $value->comentarios->count() }}
                                            <i class="bi bi-send"></i>
                                            <i class="bi bi-bookmark"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>


            </main>

            <!-- Custom JS -->
            <script src=" "></script>

            <!-- Bootstrap JS -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
            </script>
    </div>
    </body>

    </html>
@endsection
