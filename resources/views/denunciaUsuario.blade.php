@extends('adminlte::page')

@section('content')
    <!doctype html>
    <html lang="pt-BR">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Denunciar Usuário</title>

        <!--    BOOTSTRAP    -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

        <!--    BOOTSTRAP  ICONS    -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

        <!-- Custom CSS -->
        <link rel="stylesheet" href="#">

        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');

            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: 'Poppins', sans-serif;
            }

            h1 {
                color: #4D3E3E;
                font-weight: bold;
            }

            p {
                color: #4D3E3E;
            }

            span {
                font-size: 15px;
                font-weight: bold;
            }

            .btn {
                color: #4D3E3E;
                background: #d4cec3;
            }

            .btn:hover {
                color: #d4cec3;
                background: #4D3E3E;
            }
        </style>

    </head>

    <body>
        <!--   FORMULARIO  DENUNCIAR USUÁRIO    -->
        <div class="container text-center my-5">
            <div class="row">
                <section class="form-box d-flex justify-content-center align-items-center">
                    <div class="border rounded-3 p-5 shadow box-area">
                        <form action="#" method="POST">

                            <h1 style="font-family: 'Courier New', Courier, monospace; font-weight: 600">Denunciar usuário</h1>                            </h1>

                            <p>Lamentamos o incômodo que possa estar sentindo. Digite abaixo o motivo desta denúncia.</p>

                            <div class="mb-3">
                                <div class="form-floating mb-3 mt-3 text-muted">
                                    <input type="text" class="form-control" id="biografia" placeholder=""
                                        name="biografia">
                                    <label for="biografia">Detalhe o motivo</label>
                                </div>
                            </div>

                            <div class="mb-3 text-muted text-center">
                                <button type="submit" class="btn fw-bold">Salvar</button>
                            </div>

                        </form>
                    </div>
                </section>
            </div>
        </div>

        <!-- Custom JS -->
        <script src="#"></script>

        <!--    BOOTSTRAP   JS   -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
        </script>

    </body>

    </html>
@endsection
