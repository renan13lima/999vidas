@extends('adminlte::page')

@section('content')
    <!doctype html>
    <html lang="pt-BR">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blog</title>

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

        <!-- Bootstrap ICONS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

        <!-- Custom CSS -->
        <link href="{{ url('assets/css/postagem.css') }}" rel="stylesheet" type="text/css" media="all">

    </head>

    <body>

        <div class="container">
            <main id="main">
                <!--   INICIO    -->
                <div class="row">
                    <div class="mx-auto col-10 my-3">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0 card-title">{{ $postagem->titulo }}</h5>
                            </div>

                            <!--   CARD BODY    -->
                            <div class="card-body">
                                <div class="perfilUser d-flex align-items-center">
                                     <img src="data:image/png;base64,{{ $postagem->user->foto }}" alt="Avatar do autor">
                                    <div class="userPost">
                                        <div class="userName">{{ $postagem->user->name }}</div>
                                        <span><time
                                                class="published">{{ \Carbon\Carbon::parse($postagem->created_at)->diffForHumans() }}</time></span>
                                    </div>

                                    <!--  ICONE DENUNCIAR    -->
                                    <i class="bi bi-exclamation-triangle text-danger ms-auto dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Denunciar Usuário</a></li>
                                            <li><a class="dropdown-item" href="#">Denunciar postagem</a></li>
                                        </ul>
                                    </i>
                                </div>

                                <!-- CONTEUDO POSTAGEM -->
                                <p class="card-text">{!! $postagem->conteudo !!}</p>

                            </div> <!-- Fechando CARD BODY -->

                            <!-- FOOTER CARD -->
                            <div class="card-footer bg-transparent d-flex">
                                <time
                                    class="published">{{ \Carbon\Carbon::parse($postagem->created_at)->format('d/m/Y') }}</time>
                                <div class="ms-auto">
                                    <!-- <a href="#">{{ $postagem->categoria->nome }}</a> -->
                                    <a href="{{ url('/blog/curtida/' . $postagem->id) }}">
                                        <i class="bi bi-heart"></i></a>
                                    {{ $postagem->curtidas->count() }}

                                    <a href="{{ url('/blog/postagem/' . $postagem->id) }}">
                                        <i class="bi bi-chat"></i></a>
                                    {{ $postagem->comentarios->count() }}
                                </div>
                            </div>

                        </div> <!-- Fechando CARD -->
                    </div>

                    <!-- COMENTANDO -->
                    <div class="mx-auto col-10 my-3">
                        @auth
                            <form action="{{ route('blog.postagemComentario', $postagem->id) }}" method="post">
                                @csrf
                                <div class="mb-3 mx-auto col-8">
                                    <textarea name="conteudo" class="form-control" id="conteudo"></textarea>
                                </div>

                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn btn-primary px-4">Comentar</button>
                                </div>
                            </form>
                        @endauth

                        <h3 class="mt-5 text-center">Comentários:</h3>

                            @foreach ($postagem->comentarios as $comentario)
                            <div class="py-2">
                                <h6 class="fw-bold">{{ $comentario->user->name }}</h6>
                                <p class="">{{ $comentario->conteudo }}</p>
                                <span class="data">| Data {{ $comentario->created_at }}</span>
                                <hr class="my-2">
                            </div>
                        @endforeach

                    </div> <!-- Fechando COMENTARIOS -->
                </div> <!-- Fechando ROW -->
            </main>
        </div> <!-- Fechando CONTAINER principal -->

        <!-- Custom JS -->
        <script src=" "></script>

        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
        </script>
    </body>

    </html>
@endsection
