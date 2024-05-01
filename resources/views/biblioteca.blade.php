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
                width: 100px;
                height: 100%;
                padding: 5px;
                border-radius: 5%;
            }
            .buscar {
                color: #4b4044;
                background: #d4cec3;
            }
            .buscar a:hover {
                color: #d4cec3;
                background-color: #604b32;
            }
            .burlywood {
                background-color: #deb887;
            }
        </style>
    </head>

    <body>
        <!--  NAVBAR -->
        <section class="my-3 text-center">
            <h1>BIBLIOTECA COMPARTILHADA</h1>

            <!-- OS MAIS VENDIDOS           -->
            <div class="row biblioteca text-center mt-5 py-4">
                <h5>OS MAIS VENDIDOS</h5>
                <div class="d-flex flex-wrap justify-content-center">
                    <div>
                        <a href="#" target=" "><img src="https://thatdev.neocities.org/lel/imgs/capas/20lesub.jpg"
                                class="img-fluid" alt="capa do livro 20 MIL LÉGUAS SUBMARINAS" width=""></a>
                    </div>
                    <div>
                        <a href="#" target=" "><img
                                src="https://thatdev.neocities.org/lel/imgs/capas/OpQPrincipe.jpg" class="img-fluid"
                                alt="capa do livro O pequeno Principe" width=""></a>
                    </div>
                    <div>
                        <a href="#" target=" "><img src="https://thatdev.neocities.org/lel/imgs/capas/alice01.jpg"
                                class="img-fluid" alt="capa do livro Alice no Pais das Maravilhas" width=""></a>
                    </div>
                    <div>
                        <a href="#" target=" "><img src="https://thatdev.neocities.org/lel/imgs/capas/alice02.jpg"
                                class="img-fluid" alt="capa do livro Alice Atraves do Espelho" width=""></a>
                    </div>
                    <div>
                        <a href="#" target=" "><img
                                src="https://m.media-amazon.com/images/I/510CMxWIujL._SY344_BO1,204,203,200_QL70_ML2_.jpg"
                                class="img-fluid" alt="capa do livro A princesa que Salva a Si mesmo nesse Livro"
                                width=""></a>
                    </div>
                    <div>
                        <a href="#" target=" "><img src="https://thatdev.neocities.org/lel/imgs/capas/20lesub.jpg"
                                class="img-fluid" alt="capa do livro 20 MIL LÉGUAS SUBMARINAS" width=""></a>
                    </div>
                    <div>
                        <a href="#" target=" "><img
                                src="https://thatdev.neocities.org/lel/imgs/capas/OpQPrincipe.jpg" class="img-fluid"
                                alt="capa do livro O pequeno Principe" width=""></a>
                    </div>
                    <div>
                        <a href="#" target=" "><img src="https://thatdev.neocities.org/lel/imgs/capas/alice01.jpg"
                                class="img-fluid" alt="capa do livro Alice no Pais das Maravilhas" width=""></a>
                    </div>
                    <div>
                        <a href="#" target=" "><img src="https://thatdev.neocities.org/lel/imgs/capas/alice02.jpg"
                                class="img-fluid" alt="capa do livro Alice Atraves do Espelho" width=""></a>
                    </div>
                    <div>
                        <a href="#" target=" "><img
                                src="https://m.media-amazon.com/images/I/510CMxWIujL._SY344_BO1,204,203,200_QL70_ML2_.jpg"
                                class="img-fluid" alt="capa do livro A princesa que Salva a Si mesmo nesse Livro"
                                width=""></a>
                    </div>
                    <div>
                        <a href="#" target=" "><img
                                src="https://thatdev.neocities.org/lel/imgs/capas/20lesub.jpg" class="img-fluid"
                                alt="capa do livro 20 MIL LÉGUAS SUBMARINAS" width=""></a>
                    </div>
                    <div>
                        <a href="#" target=" "><img
                                src="https://thatdev.neocities.org/lel/imgs/capas/OpQPrincipe.jpg" class="img-fluid"
                                alt="capa do livro O pequeno Principe" width=""></a>
                    </div>
                    <div>
                        <a href="#" target=" "><img
                                src="https://thatdev.neocities.org/lel/imgs/capas/alice01.jpg" class="img-fluid"
                                alt="capa do livro Alice no Pais das Maravilhas" width=""></a>
                    </div>
                    <div>
                        <a href="#" target=" "><img
                                src="https://thatdev.neocities.org/lel/imgs/capas/alice02.jpg" class="img-fluid"
                                alt="capa do livro Alice Atraves do Espelho" width=""></a>
                    </div>
                    <div>
                        <a href="#" target=" "><img
                                src="https://m.media-amazon.com/images/I/510CMxWIujL._SY344_BO1,204,203,200_QL70_ML2_.jpg"
                                class="img-fluid" alt="capa do livro A princesa que Salva a Si mesmo nesse Livro"
                                width=""></a>
                    </div>
                </div>
            </div>


            <!--   OS MAIS CURTIDOS          -->
            <div class="row biblioteca text-center mt-5 py-4 burlywood ">
                <h5>OS MAIS CURTIDOS PELA COMUNIDADE</h5>
                <div class="d-flex flex-wrap justify-content-center">
                    <div>
                        <a href="#" target=" "><img
                                src="https://thatdev.neocities.org/lel/imgs/capas/20lesub.jpg" class="img-fluid"
                                alt="capa do livro 20 MIL LÉGUAS SUBMARINAS" width=""></a>
                    </div>
                    <div>
                        <a href="#" target=" "><img
                                src="https://thatdev.neocities.org/lel/imgs/capas/OpQPrincipe.jpg" class="img-fluid"
                                alt="capa do livro O pequeno Principe" width=""></a>
                    </div>
                    <div>
                        <a href="#" target=" "><img
                                src="https://thatdev.neocities.org/lel/imgs/capas/alice01.jpg" class="img-fluid"
                                alt="capa do livro Alice no Pais das Maravilhas" width=""></a>
                    </div>
                    <div>
                        <a href="#" target=" "><img
                                src="https://thatdev.neocities.org/lel/imgs/capas/alice02.jpg" class="img-fluid"
                                alt="capa do livro Alice Atraves do Espelho" width=""></a>
                    </div>
                    <div>
                        <a href="#" target=" "><img
                                src="https://m.media-amazon.com/images/I/510CMxWIujL._SY344_BO1,204,203,200_QL70_ML2_.jpg"
                                class="img-fluid" alt="capa do livro A princesa que Salva a Si mesmo nesse Livro"
                                width=""></a>
                    </div>
                </div>
            </div>

            <!--   LANÇAMENTOS          -->
            <div class="row biblioteca text-center mt-5 py-4">
                <h5>LANÇAMENTOS</h5>
                <div class="d-flex flex-wrap justify-content-center">
                    <div>
                        <a href="#" target=" "><img
                                src="https://thatdev.neocities.org/lel/imgs/capas/20lesub.jpg" class="img-fluid"
                                alt="capa do livro 20 MIL LÉGUAS SUBMARINAS" width=""></a>
                    </div>
                    <div>
                        <a href="#" target=" "><img
                                src="https://thatdev.neocities.org/lel/imgs/capas/OpQPrincipe.jpg" class="img-fluid"
                                alt="capa do livro O pequeno Principe" width=""></a>
                    </div>
                    <div>
                        <a href="#" target=" "><img
                                src="https://thatdev.neocities.org/lel/imgs/capas/alice01.jpg" class="img-fluid"
                                alt="capa do livro Alice no Pais das Maravilhas" width=""></a>
                    </div>
                    <div>
                        <a href="#" target=" "><img
                                src="https://thatdev.neocities.org/lel/imgs/capas/alice02.jpg" class="img-fluid"
                                alt="capa do livro Alice Atraves do Espelho" width=""></a>
                    </div>
                    <div>
                        <a href="#" target=" "><img
                                src="https://m.media-amazon.com/images/I/510CMxWIujL._SY344_BO1,204,203,200_QL70_ML2_.jpg"
                                class="img-fluid" alt="capa do livro A princesa que Salva a Si mesmo nesse Livro"
                                width=""></a>
                    </div>
                </div>
            </div>

            <!--   GENERO - ROMANCE        -->
            <div class="row biblioteca text-center mt-5 py-4 burlywood">
                <h5>ROMANCE</h5>
                <div class="d-flex flex-wrap justify-content-center">
                    <div>
                        <a href="#" target=" "><img
                                src="https://thatdev.neocities.org/lel/imgs/capas/20lesub.jpg" class="img-fluid"
                                alt="capa do livro 20 MIL LÉGUAS SUBMARINAS" width=""></a>
                    </div>
                    <div>
                        <a href="#" target=" "><img
                                src="https://thatdev.neocities.org/lel/imgs/capas/OpQPrincipe.jpg" class="img-fluid"
                                alt="capa do livro O pequeno Principe" width=""></a>
                    </div>
                    <div>
                        <a href="#" target=" "><img
                                src="https://thatdev.neocities.org/lel/imgs/capas/alice01.jpg" class="img-fluid"
                                alt="capa do livro Alice no Pais das Maravilhas" width=""></a>
                    </div>
                    <div>
                        <a href="#" target=" "><img
                                src="https://thatdev.neocities.org/lel/imgs/capas/alice02.jpg" class="img-fluid"
                                alt="capa do livro Alice Atraves do Espelho" width=""></a>
                    </div>
                    <div>
                        <a href="#" target=" "><img
                                src="https://m.media-amazon.com/images/I/510CMxWIujL._SY344_BO1,204,203,200_QL70_ML2_.jpg"
                                class="img-fluid" alt="capa do livro A princesa que Salva a Si mesmo nesse Livro"
                                width=""></a>
                    </div>
                </div>
            </div>



        </section>

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
