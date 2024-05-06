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
        <link href="#" rel="stylesheet" type="text/css" media="all">

        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');

            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: 'Poppins', sans-serif;
            }

            main {
                padding-top: 35px;
            }

            .card {
                box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
            }

            .card-header {
                background: #faebd7;
            }

            .nav-tabs a {
                font-weight: bold;
                color: #4D3E3E;
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

            .card-text {
                font-family: Lucida Console;
                color: rgb(80, 80, 80);
            }

            .data {
                font-size: 12px;
                color: gray;
            }

            .btn {
                color: #604b32;
                background: rgb(224, 219, 210);
                border: rgb(224, 219, 210);
            }

            .btn:hover {
                color: #604b32;
                background: #d4cec3;
                border: #d4cec3;
            }
        </style>
    </head>

    <body>

        <div class="container">
            <main id="main">
                <!--   INICIO    -->
                <div class="row">

                    @yield('content')

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
