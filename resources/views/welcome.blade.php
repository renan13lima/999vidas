@extends('layouts.app')

@section('content')

@foreach ($postagens as $value)
						<!-- Post -->
							<article class="post">
								<header>
									<div class="title">
										<h2><a href="#">{{ $value->titulo }}</a></h2>
										<p></p>
									</div>
									<div class="meta">
										<time class="published" datetime="2015-11-01">{{ \Carbon\Carbon::parse($value->created_at)->format('d/m/Y h:i:s') }}</time>
										<a href="#" class="author"><span class="name">{{ $value->user->name }}</span><img src="{{ url('images/avatar.jpg') }}" alt="" /></a>
									</div>
								</header>
								<p>{!! $value->conteudo !!}</p>
								<footer>
									<ul class="stats">
										<li><a href="#">{{ $value->categoria->nome }}</a></li>
										<li><a href="#" class="icon solid fa-heart">{{ $value->curtidas->count() }}</a></li>
										@auth
										<li><a href="{{ url('/blog/curtida/' . $value->id) }}" class="icon solid fa-heart">CURTIR</a></li>
										@endauth
										<li><a href="{{ url('/blog/postagem/' . $value->id) }}" class="icon solid fa-comment">{{ $value->comentarios->count() }} comentário(s)</a></li>
									</ul>
								</footer>
							</article>
@endforeach

@endsection
