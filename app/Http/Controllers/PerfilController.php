<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PerfilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
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

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
