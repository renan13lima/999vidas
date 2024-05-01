@extends('adminlte::page')

@section('content')
    <!doctype html>
    <html lang="pt-BR">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Explorar</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

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
                margin-top: 30px;
            }
            h3 {
                color: #4D3E3E;
                font-weight: bold;
            }
            .catalogo img {
                width: 200px;
                height: 100%;
                padding: 5px;
                border-radius: 5%;
            }
            .catalogoRes img {
                width: 150px;
                margin: 5px;
                border-radius: 5%;
                text-align: center;
            }
            .catalogoRes h5 {
                color: #604b32;
                font-weight: bold;
            }
            .biblioteca img {
                width: 150px;
                height: 100%;
                padding: 5px;
                border-radius: 5%;
            }
            /*  SLIDER   */
            #container {
                display: grid;
                place-items: center
            }
            #slider-container {
                height: 300px;
                width: 85vw;
                max-width: 1000px;
                position: relative;
                overflow: hidden;
                padding: 20px;
            }
            #slider-container .btn {
                position: absolute;
                top: calc(50% - 30px);
                height: 15px;
                width: 15px;
                border-left: 8px solid #696969;
                border-top: 8px solid #696969;
                cursor: pointer;
            }
            #slider-container .btn:hover {
                transform: scale(1.2);
            }
            #slider-container .btn.inactive {
                border-color: #282828
            }
            #slider-container .btn:first-of-type {
                transform: rotate(-45deg);
                left: 10px
            }
            #slider-container .btn:last-of-type {
                transform: rotate(135deg);
                right: 10px;
            }
            #slider-container #slider {
                display: flex;
                width: 1000%;
                height: 100%;
                transition: all .5s;
            }
            #slider-container #slider .slide {
                height: 90%;
                margin: auto 10px;
                border-radius: 5px;
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
        <div class="container-fluid">
            <main id="main">
                <div class="container">
                    <section>

                        <!-- CARROSSEL -->
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ url('/images/post-biblion.jpg') }}" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <a href="https://biblion.odilo.us/">
                                        <img src="{{ url('/images/bienal2025.jpg') }}" class="d-block w-100" alt="...">
                                    </a>
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ url('/images/post-biblion.jpg') }}" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </section>
                </div>

                <!-- EM ALTA -->
                <section class="container my-3">

                    <h3 class="text-center">EM ALTA</h3>

                    <div id="container">
                        <div id="slider-container">
                            <span onclick="slideRight()" class="btn"></span>
                            <div id="slider">

                                <img src="https://thatdev.neocities.org/lel/imgs/capas/OmisteriroCFantasma.png"
                                    alt="capa do livro O Misterio da cidade-Fantasma" class="slide" width="">

                                <img src="https://thatdev.neocities.org/lel/imgs/capas/julioVerne01.jpg"
                                    alt="capa do livro viagem ao mundo em 80 dias" class="slide" width="">

                                <img src="https://thatdev.neocities.org/lel/imgs/capas/Lovecraft01.jpg"
                                    alt="capa do livro Lovrecraft" class="slide" width="">

                                <img src="https://thatdev.neocities.org/lel/imgs/capas/dzhsterror02.png"
                                    alt="capa do livro Doze horas de terror" class="slide" width="">

                                <img src="https://thatdev.neocities.org/lel/imgs/capas/julioVerne02.jpg"
                                    alt="capa do livro Viagem ao Centro da Terra" class="slide" width="">

                                <img src="https://thatdev.neocities.org/lel/imgs/capas/20lesub.jpg"
                                    alt="capa do livro 20 MIL LÉGUAS SUBMARINAS" class="slide" width="">

                                <img src="https://thatdev.neocities.org/lel/imgs/capas/OpQPrincipe.jpg"
                                    alt="capa do livro O pequeno Principe" class="slide" width="">

                                <img src="https://thatdev.neocities.org/lel/imgs/capas/alice01.jpg"
                                    alt="capa do livro Alice no Pais das Maravilhas" class="slide" width="">

                                <img src="https://thatdev.neocities.org/lel/imgs/capas/alice02.jpg"
                                    alt="capa do livro Alice Atraves do Espelho" class="slide" width="">

                                <img src="https://m.media-amazon.com/images/I/510CMxWIujL._SY344_BO1,204,203,200_QL70_ML2_.jpg"
                                    alt="capa do livro A princesa que Salva a Si mesmo nesse Livro" class="slide"
                                    width="">

                            </div>
                            <span onclick="slideLeft()" class="btn"></span>
                        </div>
                    </div>
                </section>

                <!-- RESENHAS EM ALTA -->
                <section class="container my-3">
                    <h3>LIVROS MAIS RESENHADOS</h3>
                    <div class="row  catalogoRes">
                        <div class="">
                            <div class="border-bottom d-flex py-1">
                                <a href="#"><img src="https://static.oskeelo.com.br/300/450/100/9+9786558812012.jpg"
                                        alt="capa do livro" width=""></a>
                                <div class="p-1">
                                    <h5>Desmortos</h5>
                                    <p>Lorena acorda na gaveta de um necrotério para, logo em seguida, perceber que está
                                        mesmo morta. Porém, o que parecia ser o seu fim acabou se tornando o início de uma
                                        mórbida e divertida jornada no Mais-Além, onde vampiros gostam de pantufas, bolinhos
                                        red velvet imitam sangue e fantasmas tocam guitarra ao lado de uma "lobismina" e de
                                        um médium em uma banda de rock. A nova desmorta Lorena vai precisar se aceitar como
                                        uma confusa zumbi de cabelos coloridos, enquanto seu coração morto se divide entre o
                                        misterioso e melancólico fantasma Lucas, e o médium, charmoso e tatuado, Felipe.
                                        Mas, será mesmo que ela vai precisar escolher entre um dos dois?</p>
                                </div>
                            </div>

                            <div class="border-bottom d-flex py-1">
                                <a href="https://www.amazon.com.br/Esque%C3%A7am-Rosa-Giselda-Laporta-Nicolelis/dp/8502079654"
                                    target=" "><img src="https://m.media-amazon.com/images/I/710sh3C96HL._SL1500_.jpg"
                                        alt="capa do livro" width=""></a>
                                <div class="p-1">
                                    <h5>Não se esqueçam da rosa</h5>
                                    <p>Hanako tem apenas 13 anos e corre risco de vida. Ela sofre de osteopatia -
                                        degeneração progressiva dos ossos. Sua doença tem origem genética, pois as células
                                        reprodutoras de seu pai foram afetadas pela radioatividade a que estivera exposto
                                        durante a explosão da bomba atômica em Hiroshima. Sem saber ao certo quanto tempo
                                        lhe resta de vida, Hanako vai registrando em seu diário as reflexões que faz sobre
                                        as guerras e suas vítimas.</p>
                                </div>
                            </div>

                            <div class="border-bottom d-flex py-1">
                                <a href="#"><img src="https://m.media-amazon.com/images/I/71CuLBjVCPL._SL1500_.jpg"
                                        alt="capa do livro" width=""></a>
                                <div class="p-1">
                                    <h5>O mundo depois de nós</h5>
                                    <p>Com a expectativa de curtir uma semana de férias, Amanda e Clay alugam uma casa em um
                                        lugar remoto de Long Island. Tudo o que eles querem é um descanso da vida agitada
                                        que levam na cidade de Nova York, aproveitar um tempo de qualidade com os dois
                                        filhos adolescentes e se deleitar na propriedade luxuosa. No entanto, uma batida na
                                        porta tarde da noite traz uma mudança inesperada. Eles se deparam com um casal em
                                        pânico, Ruth e G. H., que afirmam ser os proprietários. Esses estranhos alegam que
                                        uma queda repentina de energia devastou a cidade e, sem outro lugar aonde ir, eles
                                        decidiram voltar para a casa de veraneio em busca de abrigo.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>

                <!-- DESTAQUE DO MÊS -->

                <section class="text-center my-3 py-3" style="background: #faf0e6;">
                    <div class="container">
                        <h3>DESTAQUE</h3>
                        <hr>
                        <div class="row">
                            <div class="d-flex">
                                <a href="#"><img src="https://thatdev.neocities.org/milvidas/imgs/bienal.png"
                                        alt="ilustração" width="200px"></a>
                                <div class="p-1">
                                    <h5>Bienal do Livro Rio anuncia próxima data: junho de 2025</h5>
                                    <p class="lead">A Bienal do Livro Rio anunciou nesta quinta-feira (25) suas datas
                                        para 2025: <strong>entre os dias 13 e 22 de junho.</strong></p>
                                    <p class="lead">Em 2023, a Bienal teve uma histórica edição de 40 anos, com recordes
                                        de vendas de livros e mais de 600 mil pessoas no ano passado</p>
                                </div>
                            </div>
                        </div>
                        <hr>
                    </div>
                </section>

                <!-- LIVROS EM ALTA NA COMUNIDADE -->

                <section class="container my-3">
                    <h3>LIVROS MAIS COMENTADOS</h3>
                    <div class="row  catalogo text-center">
                        <div class="d-flex flex-wrap">
                            <div>
                                <img src="https://thatdev.neocities.org/lel/imgs/capas/20lesub.jpg"
                                    alt="capa do livro 20 MIL LÉGUAS SUBMARINAS" width="">
                            </div>

                            <div>
                                <img src="https://thatdev.neocities.org/lel/imgs/capas/OpQPrincipe.jpg"
                                    alt="capa do livro O pequeno Principe" width="">
                            </div>

                            <div>
                                <img src="https://thatdev.neocities.org/lel/imgs/capas/alice01.jpg"
                                    alt="capa do livro Alice no Pais das Maravilhas" width="">
                            </div>

                            <div>
                                <img src="https://thatdev.neocities.org/lel/imgs/capas/alice02.jpg"
                                    alt="capa do livro Alice Atraves do Espelho" width="">
                            </div>

                            <div>
                                <img src="https://m.media-amazon.com/images/I/510CMxWIujL._SY344_BO1,204,203,200_QL70_ML2_.jpg"
                                    alt="capa do livro A princesa que Salva a Si mesmo nesse Livro" width="">
                            </div>

                            <div>
                                <img src="https://thatdev.neocities.org/lel/imgs/capas/Lovecraft01.jpg"
                                    alt="capa do livro Lovrecraft" width="">
                            </div>

                        </div>
                    </div>

                </section>

                <!-- CITAÇÃO -->
                <section class="text-center my-3 py-3" style="background: #eee1d1;">
                    <div class="container">
                        <figure class="text-center">
                            <blockquote class="blockquote">
                                <p>Existem certos sofrimentos que só podem ser esquecidos quando podemos flutuar por cima de
                                    nossas dores.</p>
                            </blockquote>
                            <figcaption class="blockquote-footer">
                                Paulo Coelho <cite title="Source Title">(Manual do Guerreiro da Luz, 1997)</cite>
                            </figcaption>
                        </figure>
                    </div>
                </section>

                <!-- ARTIGOS  -->
                <section class="container my-5">
                    <h3>ARTIGOS MAIS CURTIDOS</h3>

                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <div class="col">
                            <div class="card h-100">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card Title</h5>
                                    <p class="card-text"></p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a short card.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural
                                        lead-in to additional content.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </main>
        </div>

        <!-- Custom JS -->
        <script src="https://thatdev.neocities.org/milvidas/js/slide.js"></script>

        <!--     RODAPE       -->
        <footer class="rodape text-center pb-4">
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
