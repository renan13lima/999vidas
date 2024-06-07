<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DenunciaPostagem;
use App\Models\Postagem;

class DenunciaPostagemController extends Controller
{

    public function justificativa(Request $request)
    {
       //dd($request->all());
       $denuncia_postagem = DenunciaPostagem::find($request->denuncia_id);
       $denuncia_postagem->status = $request->status;
       $denuncia_postagem->justificativa = $request->justificativa;
       $denuncia_postagem->save();

       if($request->status == 'Aceito'){
            $postagem = Postagem::find($request->postagem_id);
            $postagem->status = 0;
            $postagem->save();

       }
    }


    public function denuncia_postagem(Request $request)
    {
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
        $denuncia_postagem = DenunciaPostagem::get();
        return view('denuncia.denuncia_postagem_index', ['denuncia_postagem' => $denuncia_postagem]);
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
        $denuncia_postagem = new DenunciaPostagem;
        $denuncia_postagem-> conteudo = $request -> conteudo;
        $denuncia_postagem-> save();

        return redirect('denuncia_postagem')->with('status', 'Denúncia salva com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $denuncia_postagem = DenunciaPostagem::find($id);
        return view('denuncia.denuncia_postagem_show', ['denuncia_postagem' => $denuncia_postagem]);
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
        $denuncia_postagem = DenunciaPostagem::find($id);
        $denuncia_postagem->delete();
        return redirect('denuncia_postagem')->with('status', 'Denúncia resolvida');
    }
}
