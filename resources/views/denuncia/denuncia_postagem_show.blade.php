@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mt-5">
                    <div class="card-header">Conteúdo da denúncia da postagem</div>
                    <div class="card-body">
                        <strong> Postagem denunciada:</strong> {{ $denuncia_postagem->postagem->titulo }}<br>
                        <strong> Denunciante:</strong> {{ $denuncia_postagem->denunciante->name }}<br>
                        <strong> Descrição da denúncia:</strong> {{ $denuncia_postagem->conteudo }}<br>
                        <strong> Criação:</strong>
                        {{ \Carbon\Carbon::parse($denuncia_postagem->created_at)->format('d/m/Y h:i:s') }}<br>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
