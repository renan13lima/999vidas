@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Denúncia Usuário</div>

                    <div class="card-body">

                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Denunciante</th>
                                    <th scope="col">Denunciado</th>
                                    <th scope="col">Conteúdo</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($denuncia_usuario as $value)
                                    <th scope="row">{{ $value->id }}</th>
                                    <td>{{ $value->denunciante->name }}</td>
                                    <td>{{ $value->denunciado->name }}</td>
                                    <td><a class="btn btn-primary" href="{{ url('/denuncia_usuario_show/' . $value->id) }}"
                                            role="button">Vizualizar</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endsection
