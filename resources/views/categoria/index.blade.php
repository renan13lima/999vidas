@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Categoria</div>

                <div class="card-body">

                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

         <a class="btn btn-success" href="{{ url('/categoria/create' ) }}" role="button">Criar</a>


    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col"></th>
                </tr>
        </thead>
    <tbody>

    @foreach ($categorias as $value)
    <th scope="row">{{ $value->id }}</th>
    <td>{{ $value->nome }}</td>
        <td><a class="btn btn-primary" href="{{ url('/categoria/' .$value->id ) }}" role="button">Vizualizar</a></td>
        <td><a class="btn btn-warning" href="{{ url('/categoria/' .$value->id .  '/edit') }}" role="button">Editar</a> </td>

        <td>


            <form method="POST" action="{{ url('/categoria/' . $value->id) }}">
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
