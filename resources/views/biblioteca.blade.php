@extends('adminlte::page')

@section('content')
    <!doctype html>
    <html lang="pt-BR">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Biblioteca</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

        <!-- Custom CSS -->
        <!--<link href="{{ url('assets/css/biblioteca.css') }}" rel="stylesheet" type="text/css" media="all">-->

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

            h5 {
                color: #4D3E3E;
                font-weight: bold;
            }

            .biblioteca img {
                width: 100%;
                height: 250px;
                padding: 5px;
                border-radius: 5%;
            }

            .burlywood {
                background-color: #deb887;
            }
        </style>

    </head>

    <body>
        <!--  NAVBAR -->
        <section class="text-center">
            <h1 class="pt-5 mb-2">BIBLIOTECA COMPARTILHADA</h1>

            <p>Aqui você encontra livros gratuitos eletrônicos, para incentivar e estimular a leitura entre os usuários.<br>
            Basta clicar nas imagens e embarcar nesses mil mundos disponíveis</p>

            <!-- ESSENCIAIS -->
            <div class="row biblioteca text-center mt-3 py-4">
                <h5>ESSENCIAIS</h5>
                <div class="d-flex flex-wrap justify-content-center">
                    <div>
                        <a href="#" target=" "><img src="http://localhost/999vidas/public/images/capa20MilLeguas.jpg"
                                class="img-fluid" alt="capa do livro 20 MIL LÉGUAS SUBMARINAS" width=""></a>
                    </div>
                    <div>
                        <a href="#" target=" "><img src="http://localhost/999vidas/public/images/capaAlicePaisMaravilhas.jpg"
                                class="img-fluid" alt="capa do livro Alice no Pais das Maravilhas" width=""></a>
                    </div>
                    <div>
                        <a href="#" target=" "><img
                                src="http://localhost/999vidas/public/images/capaPequenoPrincipe.jpg" class="img-fluid"
                                alt="capa do livro O pequeno Principe" width=""></a>
                    </div>
                    <div>
                        <a href="#" target=" "><img src="http://localhost/999vidas/public/images/capaAliceAtravesEspelho.jpg"
                                class="img-fluid" alt="capa do livro Alice Atraves do Espelho" width=""></a>
                    </div>
                    <div>
                        <a href="https://renanlima.neocities.org/Mil_Vidas/Frankenstein.pdf" target=" "><img
                                src="http://localhost/999vidas/public/images/capaFrankenstein.jpg"
                                class="img-fluid" alt="capa do livro Frankenstein"
                                width=""></a>
                    </div>
                </div>
            </div>
            </div>

            <!-- CLÁSSICOS -->
            <div class="row biblioteca text-center mt-5 py-4 burlywood">
                <h5>CLÁSSICOS</h5>
                <div class="d-flex flex-wrap justify-content-center">
                    <div>
                        <a href="https://renanlima.neocities.org/Mil_Vidas/O%20Retrato%20de%20Dorian%20Grey.pdf" target=" ">
                            <img src="http://localhost/999vidas/public/images/capaORetratoDeDorianGray.jpg"
                            class="img-fluid" alt="capa do livro O Retrato de Dorian Grey" width=""></a>
                    </div>
                    <div>
                        <a href="https://renanlima.neocities.org/Mil_Vidas/Os%20Sofrimentos%20do%20Jovem%20Werther.pdf" target=" ">
                            <img src="http://localhost/999vidas/public/images/capaOsSofrimentosDoJovemWerther.jpg"
                            class="img-fluid" alt="capa do livro Os Sofrimentos do Jovem Werther" width=""></a>
                    </div>
                    <div>
                        <a href="https://renanlima.neocities.org/Mil_Vidas/O%20Beijo%20No%20Asfalto.pdf" target=" ">
                            <img src="http://localhost/999vidas/public/images/capaOBeijoNoAsfalto.jpg"
                            class="img-fluid" alt="capa do livro O Beijo no Asfalto" width=""></a>
                    </div>
                    <div>
                        <a href="https://renanlima.neocities.org/Mil_Vidas/A%20Obscena%20Senhora%20D.pdf" target=" ">
                            <img src="http://localhost/999vidas/public/images/capaAObscenaSenhoraD.jpg"
                            class="img-fluid" alt="capa do livro A Obscena Senhora D" width=""></a>
                    </div>
                </div>
            </div>

            <!-- INDICAÇÕES -->
            <div class="row biblioteca text-center mt-4 py-4">
                <h5>INDICAÇÕES</h5>
                <div class="d-flex flex-wrap justify-content-center">
                    <div>
                        <a href="https://renanlima.neocities.org/Mil_Vidas/Cr%C3%B4nica%20de%20um%20Amor%20Louco.pdf" target=" ">
                            <img src="http://localhost/999vidas/public/images/capaCronicaDeUmAmorLouco.jpg" class="img-fluid"
                                alt="capa do livro Crônica de Um Amor Louco" width=""></a>
                    </div>

                    <div>
                        <a href="https://renanlima.neocities.org/Mil_Vidas/Pele%20Negra%20M%C3%A1scaras%20Brancas.pdf"
                            target=" ">
                            <img src="http://localhost/999vidas/public/images/capaPeleNegra,MascarasBrancas.jpg" class="img-fluid"
                                alt="capa do livro Pele Negra, Máscaras Brancas" width=""></a>
                    </div>

                    <div>
                        <a href="https://thatdev.neocities.org/0Books0/Por%20lugares%20incriveis%20-%20Jennifer%20Niven.pdf"
                            target=" ">
                            <img src="http://localhost/999vidas/public/images/capaPorLugaresIncriveis.jpg" class="img-fluid"
                                alt="capa do livro Por Lugares Incríveis" width=""></a>
                    </div>

                    <div>
                        <a href="https://thatdev.neocities.org/0Books0/Lovecraft-CorCaiuCeu.pdf" target=" ">
                            <img src="http://localhost/999vidas/public/images/capaCorCaiuCeu.jpg" class="img-fluid"
                                alt="capa do livro A Cor Que Caiu do Céu" width=""></a>
                    </div>

                    <div>
                        <a href="https://thatdev.neocities.org/0Books0/Pai%20Rico,%20Pai%20Pobre.pdf"
                            target=" ">
                            <img src="http://localhost/999vidas/public/images/capaPaiRicoPaiPobre.jpg"
                                class="img-fluid" alt="capa do livro Pai Rico, Pai Pobre" width=""></a>
                    </div>
                </div>
            </div>

            <!-- QUADRINHOS -->
            <div class="row biblioteca text-center mt-5 py-4 burlywood">
                <h5>QUADRINHOS</h5>
                <div class="d-flex flex-wrap justify-content-center">
                    <div>
                        <a href="https://renanlima.neocities.org/Mil_Vidas/A%20Diferen%C3%A7a%20Invisivel.pdf" target=" ">
                            <img src="http://localhost/999vidas/public/images/capaADiferençaInvisivel.jpg"
                            class="img-fluid" alt="capa do quadrinho A Diferença Invisível" width=""></a>
                    </div>
                    <div>
                        <a href="https://renanlima.neocities.org/Mil_Vidas/Batman%20A%20Piada%20Mortal.pdf" target=" ">
                            <img src="http://localhost/999vidas/public/images/capaBatmanAPiadaMortal.jpg"
                            class="img-fluid" alt="capa do quadrinho Batman - A Piada Mortal" width=""></a>
                    </div>
                    <div>
                        <a href="https://renanlima.neocities.org/Mil_Vidas/Ogiva.pdf" target=" ">
                            <img src="http://localhost/999vidas/public/images/capaOgiva.jpg"
                            class="img-fluid" alt="capa do quadrinho Ogiva" width=""></a>
                    </div>
                </div>
            </div>
        </section>

        <!-- RODAPE -->
        <footer class="rodape text-center pb-4">
            <div class="font-monospace p-2">M I L V I D A S</div>
        </footer>

        <!-- BOOTSTRAP -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
        </script>

        <!-- Font Awesome -->
        <script src="https://kit.fontawesome.com/651d079c52.js" crossorigin="anonymous"></script>
    </body>

    </html>
@endsection
