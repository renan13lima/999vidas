<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DenunciaPostagem;

class DenunciaPostagemController extends Controller
{
    public function denuncia_postagem(Request $request)
    {
        //dd($request->all());

        $denuncia_postagem = new DenunciaPostagem;
        $denuncia_postagem->denunciante_id = auth()->user()->id;
        $denuncia_postagem->denunciado_id = $request->denunciado_id;
        $denuncia_postagem->postagem_id = $request->postagem_id;
        $denuncia_postagem->conteudo = $request->conteudo;
        $denuncia_postagem->save();

        return back()->with('status', 'Denúncia realizada com sucesso');
    }

    public function index()
    {
        $denuncia_postagem = DenunciaPostagem::OrderBy('nome', 'ASC')->get();
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
