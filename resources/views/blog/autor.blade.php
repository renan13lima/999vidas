@extends('adminlte::page')

@section('content')

@foreach ($autores as $value)

        <article class="post">
                <div class ="title">
                    <h3><a href="{{ url('/blog/autor/' . $value->id) }}">{{ $value->name }}</a></h3>
                </div>
        </article>

@endforeach

@endsection
