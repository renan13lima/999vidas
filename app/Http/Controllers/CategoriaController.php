<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias = Categoria :: orderBy('nome','ASC')-> get();
        return view('categoria.index', ['categorias' => $categorias]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categoria.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'nome.required' => 'O campo :attribute é obrigatório.',
        ];

        $validated = $request->validate([
            'nome' => 'required|min:5',
        ], $messages);

        $categoria = new Categoria;
        $categoria-> nome = $request -> nome;
        $categoria-> save();

        return redirect('categoria')->with('status', 'Categoria salva com sucesso!');
    }

    public function show(string $id)
    {
        $categoria = Categoria::find($id);
        return view('categoria.show', ['categoria'=> $categoria]);
    }

    public function edit(string $id)
    {
        $categoria = Categoria::find($id);
        return view('categoria.edit', ['categoria'=> $categoria]);
    }

    public function update(Request $request, string $id)
    {
        $messages = [
            'nome.required' => 'O campo :attribute é obrigatório.',
        ];

        $validated = $request->validate([
            'nome' => 'required|min:5',
        ], $messages);

        $categoria = Categoria::find($id);
        $categoria-> nome = $request -> nome;
        $categoria-> save();

        return redirect('categoria')->with('status', 'Categoria atualizada com sucesso!');
    }

    public function destroy(string $id)
    {
        $categoria = Categoria::find($id);
        $categoria->delete();
        return redirect('categoria')->with('status', 'Categoria excluida com sucesso!');
    }
}
