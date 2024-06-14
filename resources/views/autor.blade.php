@extends('adminlte::page')

@section('content')
    <!doctype html>
    <html lang="pt-BR">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Autor</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

        <!-- Custom CSS -->
        <!--<link href="{{ url('assets/css/autor.css') }}" rel="stylesheet" type="text/css" media="all">-->

        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');

            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: 'Poppins', sans-serif;
            }

            h3 {
                color: rgb(88, 75, 56);
                font-family: "Lucida Console", "Courier New", monospace;
            }

            p {
                color: rgb(88, 75, 56);
            }

            .Perfil img {
                width: 100px;
                height: 100px;
                border-radius: 50%;
                margin: 20px 0px;
            }

            .box {
                border-bottom: 2px solid #d4cec3;
            }

            .footerBox {
                border-top: 2px solid #d4cec3;
                font-size: 15px;
            }

            .perfilUser {
                margin: 15px 0px;
                font-size: 10px;
            }

            .perfilUser img {
                width: 25px;
                height: 25px;
                border-radius: 50%;
                margin-right: 3px;
            }

            .userPost span {
                color: gray;
            }

            .userName {
                font-weight: bold;
            }

            .bio {}

            .Perfil span {
                font-size: 15px;
                color: gray;
            }

            .button {
                font-size: 10px;
            }
        </style>

    </head>

    <body>


    @if (session('status'))
            <div class="alert alert-success mt-3">
                {{ session('status') }}
            </div>
        @endif


        <div class="container">

            <header class="Perfil text-center">
                <img src="data:image/png;base64,{{ $autor->foto }}" alt="Avatar do autor">

                <h3>{{ $autor->name }}</h3>
                <span>{{ $autor->nick }}</span>

                <p class="bio col-8 mx-auto">{{ $autor->biografia }}</p>
            </header>

            <main>

                <div class="container">
                    <div class="row">

                        @foreach ($postagens as $value)
                            <div class="box mx-auto col-10 my-3">

                                <div class="perfilUser d-flex align-items-center">
                                    <h2>{{ $value->titulo }}</h2>
                                    <i class="bi bi-exclamation-triangle text-danger ms-auto dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#postagem"
                                                    data-bs-whatever="@post" href="#">Denunciar Postagem</a>
                                            </li>
                                        </ul>
                                    </i>

                                    <!--      FORMULARIO  DENUNCIAR POSTAGEM        -->
                                    <div class="modal fade" id="postagem" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title"
                                                        style="font-family: 'Courier New', Courier, monospace; font-weight: 600"
                                                        id="exampleModalLabel">Denunciar Postagem</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">

                                                    <form method="POST" action="{{ url('denuncia_postagem') }}">
                                                        @csrf
                                                        <div class="mb-3">
                                                            <label for="message-text" class="col-form-label">Lamentamos o
                                                                incômodo
                                                                que possa estar sentindo. <br>
                                                                Digite abaixo o motivo desta denúncia.</label>
                                                            <input type="hidden" name="denunciado_id"
                                                                value="{{ $value->user->id }}">
                                                            <input type="hidden" name="postagem_id"
                                                                value="{{ $value->id }}">
                                                            <textarea class="form-control" id="message-text" name="conteudo"></textarea>
                                                        </div>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Fechar</button>
                                                    <button type="submit" class="btn fw-bold"
                                                        value="Salvar">Enviar</button>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>



                                </div>

                                <p>{!! $value->conteudo !!}</p>

                                <div class="footerBox d-flex justify-content-between">
                                    <div>
                                        <time
                                            class="published">{{ \Carbon\Carbon::parse($value->created_at)->diffForHumans() }}</time>
                                        ·
                                        <time
                                            class="published">{{ \Carbon\Carbon::parse($value->created_at)->format('d/m/Y') }}</time>
                                    </div>
                                    <div>
                                        <a>{{ $value->categoria->nome }}</a>
                                        <a href="{{ url('/blog/curtida/' . $value->id) }}"><i class="bi bi-heart"></i></a>
                                        {{ $value->curtidas->count() }}
                                        <a href="{{ url('/blog/postagem/' . $value->id) }}"><i class="bi bi-chat"></i></a>
                                        {{ $value->comentarios->count() }}
                                    </div>

                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </main>
        </div>

        <!--    BOOTSTRAP      -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
        </script>

        <!--     Font Awesome       -->
        <script src="https://kit.fontawesome.com/651d079c52.js" crossorigin="anonymous"></script>

    </body>

    </html>
@endsection
