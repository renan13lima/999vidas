<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PerfilController extends Controller
{

    public function perfil()
    {
        $user = auth()->user();
        return view('perfil', ['user' => $user]);
    }

    public function perfilUpdate(Request $request, string $id)
    {
        //dd($request->all());

        $messages = [
            'nick.required' => 'O campo :attribute é obrigatório!',
            'biografia.required' => 'O campo :attribute é obrigatório!',
            'foto.required' => 'O campo :attribute é obrigatório!',
        ];

        $validated = $request->validate([
            'nick' => 'required|min:5',
            'biografia' => 'required|min:15',
            'foto' => 'required|mimes:jpg,png',
        ], $messages);

        $foto = $request->file('foto');

        $user = User::find($id);
        $user->nick = $request->nick;
        $user->biografia = $request->biografia;
        $user->foto = base64_encode (file_get_contents ($foto));
        $user->save();

        return redirect('perfil')->with('status', 'Perfil atualizado com sucesso!');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
