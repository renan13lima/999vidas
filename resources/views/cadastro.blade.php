<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cadastro</title>

    <!--    BOOTSTRAP    -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!--    BOOTSTRAP  ICONS    -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="#">

    <style>
        nav {
            color: #604b32;
            background: rgb(247, 246, 240);
        }

        /*         LOGIN         */
        .btn {
            color: rgb(88, 75, 56);
            background: #d4cec3;
        }

        .btn:hover {
            background: #d4cec3;
        }

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
            <a class="navbar-brand">
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
                        <a class="nav-link" href="{{ url('/') }}">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('sobre') }}">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('contato') }}">Contato</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <!-- FORMULARIO -->

    <!----------------------- Main Container -------------------------->
    <div class="container d-flex justify-content-center align-items-center my-5">

        <!----------------------- Login Container -------------------------->
        <div class="col-md-10 row border rounded-5 p-3 bg-white shadow box-area">

            <!--------------------------- Left Box ----------------------------->
            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box"
                style="background: rgb(224, 219, 210);">
                <div class="featured-image mb-3">
                    <img src="https://thatdev.neocities.org/milvidas/imgs/oie_wr3K1oXrj3DO.png" class="img-fluid"
                        style="width: 250px;">
                </div>
            </div>

            <!-------------------- ------ Right Box ---------------------------->
            <div class="col-md-6 right-box">
                <div class="row align-items-center">
                    <div class="header-text mb-4">
                        <h2 class="fs-2 my-3" style="font-family: 'Courier New', Courier, monospace; font-weight: 600">
                            MIL VIDAS</h2>

                        <form action="{{ url('cadastrar') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <div class="form-floating mb-3 mt-3 text-muted">
                                    <input type="text" class="form-control" id="name" placeholder=""
                                        name="name" required>
                                    <label for="name">nome</label>
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="form-floating mb-3 mt-3 text-muted">
                                    <input type="email" class="form-control" id="email" placeholder=""
                                        name="email" required>
                                    <label for="email">e-mail</label>
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="form-floating mb-3 mt-3 text-muted">
                                    <input type="password" class="form-control" id="senha" placeholder=""
                                        name="senha">
                                    <label for="senha">Senha</label>
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="form-floating mb-3 mt-3 text-muted">
                                    <input type="password" class="form-control" id="senhaRepet" placeholder=""
                                        name="senhaRepet">
                                    <label for="senhaRepet">Repetir a Senha</label>
                                </div>
                            </div>

                            <div class="mt-3 text-center">
                                <button type="submit" class="btn fw-bold">Criar Conta</button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--     RODAPE       -->
    <footer class="rodape text-center pb-4 fixed-bottom">
        <div class="font-monospace p-2">M I L V I D A S</div>
    </footer>

    <!-- Custom JS -->
    <script src="#"></script>

    <!--    BOOTSTRAP    JS  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>

    <!--     Font Awesome       -->
    <script src="https://kit.fontawesome.com/651d079c52.js" crossorigin="anonymous"></script>

</body>

</html>
