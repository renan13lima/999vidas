@extends('adminlte::page')

@section('content')

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<img src="data:image/png;base64,{{ $user->foto }}" />

<form method="POST" action="{{ url('/perfil/' . $user->id . '/edit') }}" enctype="multipart/form-data">
    @csrf
    <label for="fname">Nick:</label><br>
    <input type="text" id="fname" name="nick" value="{{ $user->nick }}"><br>
    <label for="lname">Biografia:</label><br>
    <input type="text" id="lname" name="biografia" value="{{ $user->biografia }}"><br>
    <label for="myfile">Selecione uma foto:</label><br>
    <input type="file" id="myfile" name="foto"><br>
    <input type="submit" value="Salvar">
</form>

@endsection
