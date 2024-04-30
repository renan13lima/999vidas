@extends('adminlte::page')

@section('content')
    <!doctype html>
    <html lang="pt-BR">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cadastro</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

        <link rel="stylesheet" href="#">

        <style>
            nav {
                color: #604b32;
                background: rgb(247, 246, 240);
            }
            /*         LOGIN
            .btn {
                color: rgb(88, 75, 56);
                background: #d4cec3;
            }

            .btn:hover {
                background: #d4cec3;
            }*/

            /*        FOOTER        */
            footer {
                background: #604b32;
                color: rgb(247, 246, 240);
            }
        </style>
    </head>

    <body>
        <!--  NAVBAR -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary">

            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="https://thatdev.neocities.org/milvidas/imgs/1.png" alt="Bootstrap" width="30"
                        height="24">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="https://thatdev.neocities.org/milvidas/home">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://thatdev.neocities.org/milvidas/sobre">Sobre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://thatdev.neocities.org/milvidas/contato">Contato</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- INSERIR CONTEÚDO AQUI -->

        <!--     RODAPE       -->
        <footer class="rodape text-center pb-4 fixed-bottom">
            <div class="font-monospace p-2">M I L V I D A S</div>
        </footer>

        <!--    BOOTSTRAP      -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
        </script>

        <!--     Font Awesome       -->
        <script src="https://kit.fontawesome.com/651d079c52.js" crossorigin="anonymous"></script>
    </body>
    </html>
@endsection
