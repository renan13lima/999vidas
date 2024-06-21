<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sobre</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <link href="{{ url('assets/css/sobre.css') }}" rel="stylesheet" type="text/css" media="all">

</head>

<body>

    <!--  NAVBAR -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand">
                <img src="https://thatdev.neocities.org/milvidas/imgs/1.png" alt="Bootstrap" width="30" height="24">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page"
                            href="{{ url('/')}}">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('contato')}}">Contato</a>
                    </li>
                </ul>
                <div>
                    <a class="nav-link" href="{{ url('login')}}">login</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container text-center my-5">

        <h1>MIL VIDAS</h1>

        <div class="col-8 mx-auto border rounded-3 p-5 bg-white shadow box-area">
            <div class="">

                <p>Criado em novembro de 2023, o Mil Vidas é uma plataforma onde
                    leitores podem compartilhar, explorar e receber dicas de novas
                    leituras. Aqui poderá escrever resenhas, citações e comentários sobre
                    os livros que já leu ou os que pretende ler.</p>

                <p>O Mil vidas quer reunir os leitores e torna nosso cantinho em um
                    clube literário onde todos tem voz.</p>

                <p><span>"Ler dar asas a imaginação."</span></p>

            </div>
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
