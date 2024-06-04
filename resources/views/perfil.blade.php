@extends('adminlte::page')

@section('content')
    <!doctype html>
    <html lang="pt-BR">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Autor</title>

        <!-- Custom CSS -->
        <link href="{{ url('assets/css/cadastroperfil.css') }}" rel="stylesheet" type="text/css" media="all">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

    </head>

    <body>

        <!--           FORMULARIO          -->
        <div class="container text-center">

            <div class="row justify-content-center">

                <section class="form-box d-flex justify-content-center align-items-center mt-5">
                    <div class="border rounded-3 p-5 shadow box-area">

                        <img src="data:image/png;base64,{{ $user->foto }}" />

                        <form method="POST" action="{{ url('/perfil/' . $user->id . '/edit') }}"
                            enctype="multipart/form-data">

                            <h1 style="font-family: 'Courier New', Courier, monospace; font-weight: 600">Perfil</h1>

                            @csrf
                            <div class="mb-3">
                                <div class="form-floating mb-3 mt-3 text-muted">
                                    <label for="fname">Nick</label>
                                    <input type="text" id="fname" class="form-control" name="nick"
                                        value="{{ $user->nick }}">
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="form-floating mb-3 mt-3 text-muted">
                                    <label for="lname">Biografia</label>
                                    <input type="text" class="form-control" id="lname" name="biografia"
                                        value="{{ $user->biografia }}">
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="form-floating mb-3 mt-3 text-muted">
                                    <label for="myfile">Selecione uma foto</label>
                                    <input type="file" class="form-control" id="myfile" name="foto">
                                </div>
                            </div>

                            <div class="mb-3 text-muted text-center">
                                <button type="submit" class="btn fw-bold" value="Salvar">Salvar</button>
                            </div>

                        </form>


                    </div>
            </div>
            </section>

        </div>

        <!--    BOOTSTRAP      -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
        </script>

        <!--     Font Awesome       -->
        <script src="https://kit.fontawesome.com/651d079c52.js" crossorigin="anonymous"></script>

    </body>

@endsection
