@extends('adminlte::page')

@section('content')



<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Perfil</title>

  <!--    BOOTSTRAP    -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

   <!--    BOOTSTRAP  ICONS    -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

      <!-- Custom CSS -->
     <link rel="stylesheet" href="#">

     <style>


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
  color:#4D3E3E;
background: #d4cec3;
}
 .btn:hover {
 color:#d4cec3;
background: #4D3E3E;
}






     </style>

</head>


<body>

<!--  NAVBAR -->


  <!--           FORMULARIO          -->
   <div class="container text-center my-5">

          <div class="row">

    <section class="form-box d-flex justify-content-center align-items-center">
        <div class="border rounded-3 p-5 shadow box-area">

              <form action="#" method="POST">

                <h1 style="font-family: 'Courier New', Courier, monospace; font-weight: 600">Perfil</h1>


               <div class="mb-3">
                  <label for="formFile" class="form-label">Carregar uma foto/imagem</label>
                  <input class="form-control" type="file" id="formFile">
               </div>


               <div class="mb-3">
                 <div class="form-floating mb-3 mt-3 text-muted">
                    <input type="text" class="form-control" id="nickname"
                         placeholder="" name="nickname" required>
                    <label for="Nome">Nome de usuario</label>
                   </div>
                </div>


                 <div class="mb-3">
                   <div class="form-floating mb-3 mt-3 text-muted">
                     <input type="text" class="form-control" id="biografia"
                           placeholder="" name="biografia">
                     <label for="biografia">Biografia</label>
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

  <!--          FIM DO FORMULARIO          -->







 <!-- Custom JS -->
    <script src="#"></script>


    <!--    BOOTSTRAP   JS   -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>



    <!--     Font Awesome       -->
    <script src="https://kit.fontawesome.com/651d079c52.js" crossorigin="anonymous"></script>




</body>

</html>

@endsection
