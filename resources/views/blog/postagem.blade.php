@extends('layouts.app')

@section('content')
						<!-- Post -->
							<article class="post">
								<header>
									<div class="title">
										<h2><a href="#">{{ $postagem->titulo }}</a></h2>
										<p></p>
									</div>
									<div class="meta">
										<time class="published" datetime="2015-11-01">{{ \Carbon\Carbon::parse($postagem->created_at)->format('d/m/Y h:i:s') }}</time>
										<a href="#" class="author"><span class="name">{{ $postagem->user->name }}</span><img src="{{ url('images/avatar.jpg') }}" alt="" /></a>
									</div>
								</header>
								<p>{!! $postagem->conteudo !!}</p>
								<footer>
									<ul class="stats">
										<li><a href="#">{{ $postagem->categoria->nome }}</a></li>
										<li><a href="#" class="icon solid fa-heart">{{ $postagem->curtidas->count() }}</a></li>
										<li><a href="{{ url('/blog/postagem/' . $postagem->id) }}" class="icon solid fa-comment">Comentário(s): <strong>{{ $postagem->comentarios->count() }}</strong></a></li>
									
									@auth
                                        <form action="{{ route('blog.postagemComentario', $postagem->id) }}" method="post">
                                            @csrf
                                            <textarea name="conteudo" id="conteudo" cols="30" rows="10"></textarea>
                                            <button type="submit" class="btn btn-danger">Comentar</button>
										</form>
									@endauth
                                    </ul>
								</footer>

								<h3>Comentários:</h3>
								@foreach ($postagem->comentarios as $comentario)
								<p>{{ $comentario->conteudo }}</p>
								<h5>Feito por {{ $comentario->user->name }} | Data {{ $comentario->created_at }}</h5>
								@endforeach

							</article>

@endsection
