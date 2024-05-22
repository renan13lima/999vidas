@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Denúncia Usuário</div>

                    <div class="card-body">

                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

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
                                    <td><a class="btn btn-primary" href="{{ url('/denuncia_usuario/' . $value->id) }}"
                                            role="button">Visualizar</a></td>
                                    <td>
                                        <form method="GET" action="{{ url('/denuncia_usuario_show/' . $value->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" class="form-control" value="Deletar">
                                        </form>
                                    </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endsection
