@extends('adminlte::page')

<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Inicio</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- Bootstrap ICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- Custom CSS -->
    <link href="{{ url('assets/css/home.css') }}" rel="stylesheet" type="text/css" media="all">
</head>

<body>

    @if (session('status'))
        <div class="alert alert-success mt-3">
            {{ session('status') }}
        </div>
    @endif

    <main id="main">


        <!--   INICIO    -->
        <div class="container-fluid">
            <div class="row">
                @foreach ($postagens as $value)
                    <div class="mx-auto col-10 my-3">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0 card-title">{{ $value->titulo }}</h5>
                            </div>

                            <!--   CARD BODY    -->
                            <div class="card-body">
                                <div class="perfilUser d-flex align-items-center">
                                    <img src="data:image/png;base64,{{ $value->user->foto }}" alt="Avatar do autor">
                                    <div class="userPost">
                                        <div class="userName">{{ $value->user->name }}</div>
                                        <p><time
                                                class="published">{{ \Carbon\Carbon::parse($value->created_at)->diffForHumans() }}</time>
                                        </p>
                                    </div>

                                    <!-- ICONE DENUNCIAR -->
                                    <i class="bi bi-exclamation-triangle text-danger ms-auto
                                              dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" data-bs-toggle="modal"
                                                    data-bs-target="#usuario" data-bs-whatever="@user"
                                                    href="#">Denunciar Usuário</a>
                                            </li>
                                            <li><a class="dropdown-item" data-bs-toggle="modal"
                                                    data-bs-target="#postagem" data-bs-whatever="@post"
                                                    href="#">Denunciar Postagem</a>
                                            </li>
                                        </ul>
                                    </i>

                                    <!-- FORMULARIO  DENUNCIAR USUARIO -->
                                    <div class="modal fade" id="usuario" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title"
                                                        style="font-family: 'Courier New', Courier, monospace; font-weight: 600"
                                                        id="exampleModalLabel">Denunciar Usuário</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">

                                                    <form method="POST" action="{{ url('denuncia_usuario') }}">
                                                        @csrf
                                                        <div class="mb-3">
                                                            <label for="message-text" class="col-form-label">Lamentamos
                                                                o incômodo
                                                                que possa estar sentindo. <br>
                                                                Digite abaixo o motivo desta denúncia.</label>
                                                            <input type="hidden" name="denunciado_id"
                                                                value="{{ $value->user->id }}">
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
                                                            <label for="message-text" class="col-form-label">Lamentamos
                                                                o incômodo
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

                                <p class="card-text">{!! $value->conteudo !!}</p>
                            </div>

                            <!-- FOOTER CARD -->
                            <div class="card-footer bg-transparent d-flex">
                                <time
                                    class="published">{{ \Carbon\Carbon::parse($value->created_at)->format('d/m/Y') }}</time>
                                <div class="ms-auto">
                                        <a href="#">{{ $postagem->categoria->nome }}</a>
                                    <a href="#"><i class="bi bi-eye"></i></a>
                                    <a href="{{ url('/blog/curtida/' . $value->id) }}"><i
                                            class="bi bi-heart"></i></a>
                                    {{ $value->curtidas->count() }}
                                    <a href="{{ url('/blog/postagem/' . $value->id) }}"><i
                                            class="bi bi-chat"></i></a>
                                    {{ $value->comentarios->count() }}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        </div>

    </main>


    <!--    BOOTSTRAP      -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>

    <!--     Font Awesome       -->
    <script src="https://kit.fontawesome.com/651d079c52.js" crossorigin="anonymous"></script>

</body>

</html>
@endsection
