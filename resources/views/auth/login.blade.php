@extends('adminlte::auth.login')


<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

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

        .passaword {
            color: rgb(224, 219, 210);
            font-size: 10px;
        }

        .passaword a:hover {
            color: rgb(88, 75, 56);
            text-decoration: none;
        }

        /*        FOOTER        */
        footer {
            background: #604b32;
            color: rgb(247, 246, 240);
        }

        footer nav-item,
        nav-link,
        a {
            padding: 10px;
            color: white;
        }

        footer a:hover {
            color: white;
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
                        <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contato</a>
                </ul>

                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="pesquisar" aria-label="Pesquisar">
                    <button class="btn btn-outline-secondary" type="submit">Pesquisar</button>
                </form>
            </div>
        </div>
    </nav>    <!-- FIM DO MENU FIXO -->

    <!--          FORMULARIO       -->
    <!----------------------- Main Container -------------------------->
    <div class="container d-flex justify-content-center align-items-center min-vh-100 my-5">
        <!----------------------- Login Container -------------------------->
        <div class="row border rounded-5 p-3 bg-white shadow box-area">
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
                        <p><small class="text-wrap text-center"
                                style="font-family: 'Courier New', Courier, monospace;">"Lute. Acredite. Conquiste.
                                Perca.
                                Deseje. Espere. Alcance. Invada. Caia.
                                Seja tudo o quiser ser, mas, acima de
                                tudo, seja sempre você."</p>
                    </div>

                    <form action="#" method="POST">
                        <div class="mb-3">
                            <div class="form-floating mb-3 mt-3">
                                <input type="email" class="form-control" id="email"
                                    placeholder="Digite seu e-mail" name="email" required>
                                <label for="email">e-mail ou nome de usuário</label>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="form-floating mb-3 mt-3">
                                <input type="text" class="form-control" id="telefone"
                                    placeholder="Digite seu numero com DD" name="telefone">
                                <label for="telefone">Senha</label>
                            </div>
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn fw-bold">Entrar</button>
                        </div>

                        <a href="#" class="passaword"><span>Esqueceu a senha?</span></a>

                        <div class="mt-3">
                            <button type="submit" class="btn fw-bold">Criar Conta</button>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>

    <!-- RODAPE -->
    <footer class="rodape fixed-bottom text-center">
        <div class="container">
            <div class="font-monospace p-2">M I L V I D A S</div>
        </div>
    </footer>

    <!--    BOOTSTRAP      -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>

    <!--     Font Awesome       -->
    <script src="https://kit.fontawesome.com/651d079c52.js" crossorigin="anonymous"></script>
</body>
</html>
