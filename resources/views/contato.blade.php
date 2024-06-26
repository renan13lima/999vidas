<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Contato</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <link href="{{ url('assets/css/contato.css') }}" rel="stylesheet" type="text/css" media="all">

</head>

<body>
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
                        <a class="nav-link" href="{{ url('/')}}">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('sobre')}}">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Contato</a>
                    </li>
                </ul>
                <div>
                    <a class="nav-link" href="{{ url('login')}}">login</a>
                </div>
            </div>
        </div>
    </nav>

    <!--           FORMULARIO          -->
    <div class="container text-center my-5">

        <div class="row">
            <section class="form-box d-flex justify-content-center align-items-center">
                <div class="border rounded-3 p-5 shadow box-area">

                    <form action="#" method="POST">

                        <h1 style="font-family: 'Courier New', Courier, monospace; font-weight: 600">Dúvidas ou
                            Sugestões</h1>
                        <p>Envie-nos uma mensagem pelo formulário abaixo ou um e-mail
                            para <span>contato-on@bol.com</span>
                        </p>

                        <div class="mb-3">
                            <div class="form-floating mb-3 mt-3 text-muted">
                                <input type="text" class="form-control" id="Nome" placeholder="" name="Nome"
                                    required>
                                <label for="Nome">Nome</label>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="form-floating mb-3 mt-3 text-muted">
                                <input type="email" class="form-control" id="email"
                                    placeholder="Digite seu e-mail" name="email" required>
                                <label for="email">e-mail</label>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="form-floating mb-3 mt-3 text-muted">
                                <input type="text" class="form-control" id="mensagem" placeholder=""
                                    name="mensagem">
                                <label for="mensagem">Escreva sua mensagem aqui</label>
                            </div>
                        </div>

                        <div class="mb-3 text-muted text-center">
                            <button type="submit" class="btn fw-bold">Enviar</button>
                        </div>

                    </form>
                </div>
            </section>

        </div>
    </div>

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
