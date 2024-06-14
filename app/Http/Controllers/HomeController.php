<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Postagem;
use App\Models\Categoria;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $postagens = Postagem::where('status', 1)->orderBy('id', 'desc')->get();
        $categorias = Categoria::orderBy('id', 'desc')->get();
        $autores = User::orderBy('id', 'desc')->get();

        return view('home', ['postagens' => $postagens, 'categorias' => $categorias, 'autores' => $autores]);

    }
}
