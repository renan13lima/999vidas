<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Postagem;
use App\Models\Categoria;
use App\Models\User;
use App\Models\Comentario;
use App\Models\Curtida;

class BlogController extends Controller
{

    public function index()
    {
        $postagens = Postagem::where('status', 1)->orderBy('id', 'DESC')->get();
        return view('welcome', ['postagens' => $postagens]);
    }

    public function categoria(){
        $categorias = Categoria::orderBy('nome', 'ASC')->get();
        return view('blog.categoria', ['categorias' => $categorias]);
    }

    public function categoriaPostagem($id){
        $postagens = Postagem::where('status', 1)->where('categoria_id', $id)->orderBy('id', 'DESC')->get();
        return view('postCategoria', ['postagens' => $postagens]);
    }

    public function autor(){
        $autores = User::orderBy('name', 'ASC')->get();
        return view('blog.autor', ['autores' => $autores]);
    }

    public function autorPostagem($id){
        $autor = User::find($id);
        $postagens = Postagem::where('status', 1)->where('user_id', $id)->orderBy('id', 'DESC')->get();
        return view('autor', ['postagens' => $postagens, 'autor' => $autor]);
    }

    public function postagem($id){
        $postagem = Postagem::where('status', 1)->find($id);

        //dd($postagem->comentarios);

        return view('blog.postagem', ['postagem' => $postagem]);
    }

    public function postagemComentario(Request $resquest, $id){

        $comentario = new Comentario;
        $comentario->conteudo = $resquest->conteudo;
        $comentario->user_id = auth()->user()->id;
        $comentario->postagem_id = $id;
        $comentario->save();

        return redirect()->route('blog.postagem', $id);
    }

    public function curtida($id){
        $curtidaExistente = Curtida::where('user_id', auth()->user()->id)->where('postagem_id', $id)->exists();

        if(!$curtidaExistente){
            $curtida = new Curtida;
            $curtida->user_id = auth()->user()->id;
            $curtida->postagem_id = $id;
            $curtida->save();
        }else{
            $curtida = Curtida::where('user_id', auth()->user()->id)->where('postagem_id', $id)->first();
            //dd ($curtida);
            $curtida->delete();
        }

        //return redirect()->route('blog.postagem', $id);
        return back()->withInput();
    }

}
