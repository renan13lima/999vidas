@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Conteúdo da denúncia</div>
                    <div class="card-body">
                        <strong> Nome:</strong> {{ $denuncia->nome }}<br>
                        <strong> Conteúdo:</strong> {{ $denuncia->conteudo }}<br>
                        <strong> Criação:</strong>
                        {{ \Carbon\Carbon::parse($denuncia->created_at)->format('d/m/Y h:i:s') }}<br>
                    </div>
                </div>
            </div>
        </div>
    @endsection
