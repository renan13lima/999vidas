@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mt-5">
                    <div class="card-header">Conteúdo da denúncia do usuário</div>
                    <div class="card-body">
                        <strong> Denunciado:</strong> {{ $denuncia_usuario->denunciado->name }}<br>
                        <strong> Denunciante:</strong> {{ $denuncia_usuario->denunciante->name }}<br>
                        <strong> Descrição da denúncia:</strong> {{ $denuncia_usuario->conteudo }}<br>
                        <strong> Criação:</strong>
                        {{ \Carbon\Carbon::parse($denuncia_usuario->created_at)->format('d/m/Y h:i:s') }}<br>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
