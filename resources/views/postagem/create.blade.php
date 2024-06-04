@extends('adminlte::page')

@section('content')

<link rel="stylesheet" href="{{ url('/richtexteditor/rte_theme_default.css') }}" />
<script type="text/javascript" src="{{ url('/richtexteditor/rte.js') }}"></script>
<script type="text/javascript" src="{{ url('/richtexteditor/plugins/all_plugins.js') }}"></script>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card mt-5">
                <div class="card-header">Postagem - CRIAR</div>

                <div class="card-body">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ url('/postagem/create') }}">
                    @csrf

                    <label for="fname">Categoria:</label><br>
                    <select class="form-control" name="categoria_id">

                    @foreach($categorias as $value)
                        <option value="{{ $value->id }}">{{ $value->nome }}</option>
                    @endforeach

                    </select>
                    <br>

                  <label for="fname">Título:</label><br>
                  <input type="text"  class="form-control" name="titulo"><br>

                  <label for="fname">Conteúdo:</label><br>
                    <textarea id="inp_editor1" class="form-control" name="conteudo">
                        &lt;p&gt;&lt;/p&gt;
                    </textarea>
                  <input type="submit"  class="form-control" value="ENVIAR">
                </form>

                <script>
                    var editor1 = new RichTextEditor("#inp_editor1");
                </script>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection
