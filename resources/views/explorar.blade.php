@extends('adminlte::page')

@section('content')
    <!doctype html>
    <html lang="pt-BR">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Explorar</title>

        <!--    BOOTSTRAP      -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

        <!--    BOOTSTRAP  ICONS    -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

        <!-- JQUERY -->
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"
            integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
            integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
            integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />

        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
            integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Custom CSS -->
        <link href="{{ url('assets/css/explorar.css') }}" rel="stylesheet" type="text/css" media="all">

    </head>

    <body>
        <div class="container-fluid">
            <main id="main">
                <div class="container">
                    <section>
                        <div class="text-center">
                            <h1 class="font-monospace">M I L V I D A S</h1>
                        </div>

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
                                    <img src="https://thatdev.neocities.org/milvidas/imgs/post-biblion.webp"
                                        class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <a href="https://biblion.odilo.us/" target=" ">
                                        <img src="https://thatdev.neocities.org/milvidas/imgs/post-biblion.webp"
                                            class="d-block w-100" alt="...">
                                    </a>
                                </div>
                                <div class="carousel-item">
                                    <img src="https://thatdev.neocities.org/milvidas/imgs/post-biblion.webp"
                                        class="d-block w-100" alt="...">
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

                <div class="container">
                    <section class="my-5">
                        <h3 class="text-center">EM ALTA</h3>
                        <div class="owl-carousel owl-theme">

                            <img src="https://thatdev.neocities.org/lel/imgs/capas/OmisteriroCFantasma.png"
                                alt="capa do livro O Misterio da cidade-Fantasma" class="slideEmAlta" width="">

                            <img src="https://thatdev.neocities.org/lel/imgs/capas/julioVerne01.jpg"
                                alt="capa do livro viagem ao mundo em 80 dias" class="slideEmAlta" width="">

                            <img src="https://thatdev.neocities.org/lel/imgs/capas/Lovecraft01.jpg"
                                alt="capa do livro Lovrecraft" class="slideEmAlta" width="">

                            <img src="https://thatdev.neocities.org/lel/imgs/capas/dzhsterror02.png"
                                alt="capa do livro Doze horas de terror" class="slideEmAlta" width="">

                            <img src="https://thatdev.neocities.org/lel/imgs/capas/julioVerne02.jpg"
                                alt="capa do livro Viagem ao Centro da Terra" class="slideEmAlta" width="">

                            <img src="https://thatdev.neocities.org/lel/imgs/capas/20lesub.jpg"
                                alt="capa do livro 20 MIL LÉGUAS SUBMARINAS" class="slideEmAlta" width="">

                            <img src="https://thatdev.neocities.org/lel/imgs/capas/OpQPrincipe.jpg"
                                alt="capa do livro O pequeno Principe" class="slideEmAlta" width="">

                            <img src="https://thatdev.neocities.org/lel/imgs/capas/alice01.jpg"
                                alt="capa do livro Alice no Pais das Maravilhas" class="slideEmAlta" width="">

                            <img src="https://thatdev.neocities.org/lel/imgs/capas/alice02.jpg"
                                alt="capa do livro Alice Atraves do Espelho" class="slideEmAlta" width="">

                            <img src="https://m.media-amazon.com/images/I/510CMxWIujL._SY344_BO1,204,203,200_QL70_ML2_.jpg"
                                alt="capa do livro A princesa que Salva a Si mesmo nesse Livro" class="slideEmAlta"
                                width="">
                        </div>
                    </section>
                </div>

                <section class="container my-5">
                    <h3>LIVROS MAIS RESENHADOS</h3>
                    <div class="row  catalogoRes">
                        <div class="">
                            <div class="border-bottom d-flex py-1">
                                <a href="https://www.amazon.com.br/Desmortos-Mary-C-M%C3%BCller/dp/6558811995" target=" "><img
                                        src="https://static.oskeelo.com.br/300/450/100/9+9786558812012.jpg"
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
                                <a href="https://www.amazon.com.br/mundo-depois-Livro-origem-Netflix-ebook/dp/B0CJN6K8NC" target=" "><img
                                        src="https://m.media-amazon.com/images/I/71CuLBjVCPL._SL1500_.jpg"
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

                <section class="text-center my-5 py-3" style="background: #faf0e6;">
                    <div class="container">
                        <h3>DESTAQUE</h3>
                        <hr>
                        <div class="row">
                            <div class="d-flex">
                                <a href="#" target=" "><img src="https://thatdev.neocities.org/milvidas/imgs/bienal.png"
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
                <section class="container my-5">
                    <h3>LIVROS MAIS COMENTADOS</h3>

                    <div class="row  catalogo">
                        <div class="d-flex justify-content-center flex-wrap">

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

                <section class="text-center my-5 py-3" style="background: #eee1d1;">
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

                <section class="container my-5">
                    <h3>ARTIGOS</h3>

                    <div class="row row-cols-1 row-cols-md-3 g-4">

                        <div class="col">
                            <div class="card">
                                <img src="https://thatdev.neocities.org/lel/imgs/mat/Majoras-Mask-Walkthrough.jpg"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Zelda Fansite</h5>
                                    <p class="card-text">
                                        Um mundo paralelo condenado ao fim iminente. Uma atmosfera ambiguamente psicodélica
                                        e sombria.
                                        Uma jornada carregada de profundidade emocional. Mais do que um game, Zelda:
                                        Majora's Mask é uma experiência.</p>
                                    <div class="text-center">
                                        <a href="https://sites.google.com/view/zelda-fansite-majoras-mask/p%C3%A1gina-inicial?authuser=0"
                                            target=" " class="btn btn-outline-info">Saiba Mais</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card">
                                <img src="https://thatdev.neocities.org/milvidas/imgs/tudoBemN%C3%A3oSerNormal.png"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Tudo bem não ser normal</h5>
                                    <p class="card-text">“Tudo bem não ser normal” (It’s Okay to Not Be Okay – 2020), série
                                        sul-coreana assinada por Jo Yong e dirigida por Park Shin-woo. O drama fez um
                                        sucesso estrondoso no ano de seu lançamento, carregando até hoje bons números de
                                        audiência por seu potencial cativante e dramático.</p>
                                    <div class="text-center">
                                        <a href="https://www.netflix.com/br/title/81243992" target=" "
                                            class="btn btn-outline-info">Saiba Mais</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card">
                                <img src="https://thatdev.neocities.org/milvidas/imgs/aSignOfAffection.png"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">A Sign of Affection</h5>
                                    <p class="card-text">A Sign Of Affection (Yubisaki to Renren) é uma série de mangá
                                        shōjo escrita e ilustrada pelo duo de mangakás suu Morishita (Hibi Chouchou e Short
                                        Cake Cake), de atualmente 10 volumes publicado em 2019 que teve uma adaptação para
                                        televisão em forma de anime pela Ajia-do Animation Works e estreou em janeiro de
                                        2024. </p>
                                    <div class="text-center">
                                        <a href="https://www.crunchyroll.com/pt-br/series/GEXH3W2V7/a-sign-of-affection"
                                            target=" " class="btn btn-outline-info">Saiba Mais</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>

            </main>
        </div>

        <!-- Custom JS -->
        <script src="https://thatdev.neocities.org/milvidas/js/slides.js"></script>

        <!--    BOOTSTRAP  JS    -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
        </script>

        <!--     Font Awesome       -->
        <script src="https://kit.fontawesome.com/651d079c52.js" crossorigin="anonymous"></script>
    </body>
    </html>
@endsection
