@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mt-5">
                    <div class="card-header">categoria</div>
                    <div class="card-body">
                        <strong> Nome:</strong> {{ $categoria->nome }}<br>
                        <strong> Criação:</strong>
                        {{ \Carbon\Carbon::parse($categoria->created_at)->format('d/m/Y h:i:s') }}<br>
                        <strong> Atualização:</strong>
                        {{ \Carbon\Carbon::parse($categoria->updated_at)->format('d/m/Y h:i:s') }}<br>
                    </div>
                </div>
            </div>
        </div>
    @endsection
