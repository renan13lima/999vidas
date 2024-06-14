<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Painel;
use App\Models\User;
use App\Models\Postagem;

class PainelController extends Controller
{

    public function painel()
    {
        $usuarios = User::count();
        $posts = Postagem::count();
        return view('painel', ['usuarios' => $usuarios], ['posts' => $posts]);
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
