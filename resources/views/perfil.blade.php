<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Perfil</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <link rel="stylesheet" href="#">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');


        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        h3 {
            color: rgb(88, 75, 56);
            font-family: "Lucida Console", "Courier New", monospace;
        }

        p {
            color: rgb(88, 75, 56);
        }

        .Perfil img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin: 20px 0px;
        }

        .box {
            border-bottom: 2px solid #d4cec3;
        }

        .footerBox {
            border-top: 2px solid #d4cec3;
            font-size: 12px;
        }

        .perfilUser {
            margin: 15px 0px;
            font-size: 10px;
        }

        .perfilUser img {
            width: 25px;
            height: 25px;
            border-radius: 50%;
            margin-right: 3px;
        }

        .userPost span {
            color: gray;
        }

        .userName {
            font-weight: bold;
        }

        .bio {}

        .Perfil span {
            font-size: 12px;
            color: gray;
        }

        .button {
            font-size: 10px;
        }
    </style>

</head>


<body>

    <div class="container my-5">

        <header class="Perfil text-center">
            <img src="https://i.pinimg.com/550x/da/ba/b8/dabab85a04f90e5e4071c906611c7271.jpg"
                alt="Foto/imagem de perfil">

            <h3>Nome Sobrenome</h3>
            <span>NickName</span>

            <p class="bio">Uma breve descrição sobre o autor como seus gostos, ocupação e visão para futuro etc.
            </p>
        </header>


        <!--  POSTAGENS DO AUTOR  -->

        <main>

            <div class="container">



                <!-- POSTAGEN -->
                <div class="row">
                    <div class="box mx-auto col-10 my-3">

                        <div class="perfilUser d-flex align-items-center">
                            <img src="https://conteudo.imguol.com.br/c/entretenimento/01/2017/10/26/a-atriz-scarlett-johansson-como-viuva-negra-1509050058915_v2_3x4.jpg"
                                class="img-fluid" alt="...">
                            <div class="userPost">
                                <div class="userName">Nome Sobrenome
                                    <span>@Nickname</span>
                                </div>
                            </div>
                            <i class="bi bi-exclamation-triangle text-danger ms-auto
                dropdown-toggle"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Denunciar postagem</a></li>
                                </ul>
                            </i>
                        </div>

                        <h2>Titulo da postagem</h2>
                        <p class="post">Conteudo Aqui</p>

                        <div class="footerBox d-flex justify-content-between">
                            <div> 20 min ago · 30 SET 2023</div>
                            <div>
                                <i class="bi bi-heart"></i>
                                <i class="bi bi-chat"></i>
                                <i class="bi bi-send"></i>
                            </div>
                        </div> <!-- Fechando FOOTER BOX -->

                    </div> <!-- Fechando CARD BODY -->
                </div> <!-- Fechando ROW -->




            </div> <!-- Fechando CONTAINER FLUID -->

        </main>


    </div><!--  fim container  -->






    <!--    BOOTSTRAP      -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>



    <!--     Font Awesome       -->
    <script src="https://kit.fontawesome.com/651d079c52.js" crossorigin="anonymous"></script>




</body>

</html>
