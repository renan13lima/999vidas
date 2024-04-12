@extends('layouts.app')

@section('content')

@foreach ($categorias as $value)

        <article class="post">
                <div class ="title">
                    <h3><a href="{{ url('/blog/categoria/' . $value->id) }}">{{ $value->nome }}</a></h3>
                </div>
        </article>

@endforeach

@endsection