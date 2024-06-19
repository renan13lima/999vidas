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

                        <!-- JUSTIFICANDO -->
                        <div class="mx-auto col-10 my-3">
                            <form action="{{ url('denuncia/justificativa') }}" method="post">
                                @csrf

                                <input type="hidden" name="denuncia_id" value="{{ $denuncia_usuario->id }}">

                                <div class="form-floating text-center">
                                    <label for="floatingSelect mx-2">Status</label>
                                    <select name="status" class="form-select" id="floatingSelect"
                                        aria-label="Floating label select example">
                                        <option value="Aceito">Aceito</option>
                                        <option value="Rejeitado">Rejeitado</option>
                                    </select>

                                </div>

                                <div class="mb-3 mx-auto col-8">
                                    <textarea name="justificativa" class="form-control" id="justificativa"></textarea>
                                </div>

                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn btn-primary px-4">Justificar</button>
                                </div>
                            </form>

                        </div> <!-- Fechando JUSTIFICATVA -->

                        <strong> Justificativa:</strong> {{ $denuncia_usuario->justificativa }}<br>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
