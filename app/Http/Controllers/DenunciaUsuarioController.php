<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DenunciaUsuario;

class DenunciaUsuarioController extends Controller
{
    public function denuncia_usuario(Request $request)
    {
        $denuncia_usuario = new DenunciaUsuario;
        $denuncia_usuario->denunciante_id = auth()->user()->id;
        $denuncia_usuario->denunciado_id = $request->denunciado_id;
        $denuncia_usuario->conteudo = $request->conteudo;
        $denuncia_usuario->save();

        return back()->with('status', 'Denúncia realizada com sucesso');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $denuncia_usuario = DenunciaUsuario::OrderBy('nome', 'ASC')->get();
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
