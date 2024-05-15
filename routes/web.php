<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\PostagemController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PerfilController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*
Route::get('/', function () {
    return view('welcome');
});
*/

//Route::get('/', [BlogController::class, 'index'])->name('blog.index');

Route::get('/', function () {
    return view('inicio');
});

Route::get('/sobre', function () {
    return view('sobre');
});

Route::get('/contato', function () {
    return view('contato');
});

Auth::routes();

Route::middleware(['auth'])->group(function () {

    Route::get('/biblioteca', function () {
        return view('biblioteca');
    });

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/perfil', [App\Http\Controllers\PerfilController::class, 'perfil'])->name('perfil.perfil');
    Route::post('/perfil/{id}/edit', [App\Http\Controllers\PerfilController::class, 'perfilUpdate'])->name('perfil.update');

    Route::get('/painel', [App\Http\Controllers\PainelController::class, 'painel'])->name('painel');
    Route::get('/explorar', [App\Http\Controllers\ExplorarController::class, 'explorar'])->name('explorar');

    Route::post('/denuncia_usuario', [App\Http\Controllers\DenunciaUsuarioController::class, 'denuncia_usuario'])->name('denuncia_usuario');
    Route::post('/denuncia_postagem', [App\Http\Controllers\DenunciaPostagemController::class, 'denuncia_postagem'])->name('denuncia_postagem');

    Route::get('/denuncia_usuario', [App\Http\Controllers\DenunciaUsuarioController::class, 'index'])->middleware('can:is_admin')->name('denuncia_usuario_index');


    // ------------------------------ CRUD CATEGORIA ---------------------------------------------

    // LISTAR GET
    Route::get('/categoria', [CategoriaController::class, 'index'])->middleware('can:is_admin')->name('categoria.index');

    // CREATE GET / STORE POST
    // create
    Route::get('/categoria/create', [CategoriaController::class, 'create'])->middleware('can:is_admin')->name('categoria.create');

    //store
    Route::post('/categoria/create', [CategoriaController::class, 'store'])->middleware('can:is_admin')->name('categoria.store');

    // SHOW - GET
    Route::get('/categoria/{id}', [CategoriaController::class, 'show'])->middleware('can:is_admin')->name('categoria.show');

    // EDIT GET / UPDATE PUT
    // edit
    Route::get('/categoria/{id}/edit', [CategoriaController::class, 'edit'])->middleware('can:is_admin')->name('categoria.edit');

    // update
    Route::put('/categoria/{id}/edit', [CategoriaController::class, 'update'])->middleware('can:is_admin')->name('categoria.update');

    // DESTROY DELETE
    Route::delete('/categoria/{id}', [CategoriaController::class, 'destroy'])->middleware('can:is_admin')->name('categoria.destroy');


    // ------------------------------ CRUD POSTAGEM ---------------------------------------------

    // LISTAR GET
    Route::get('/postagem', [PostagemController::class, 'index'])->name('postagem.index');

    // CREATE GET / STORE POST
    // create
    Route::get('/postagem/create', [PostagemController::class, 'create'])->name('postagem.create');

    //store
    Route::post('/postagem/create', [PostagemController::class, 'store'])->name('postagem.store');

    // SHOW - GET
    Route::get('/postagem/{id}', [PostagemController::class, 'show'])->name('postagem.show');

    // EDIT GET / UPDATE PUT
    // edit
    Route::get('/postagem/{id}/edit', [PostagemController::class, 'edit'])->name('postagem.edit');

    // update
    Route::put('/postagem/{id}/edit', [PostagemController::class, 'update'])->name('postagem.update');

    // DESTROY DELETE
    Route::delete('/postagem/{id}', [PostagemController::class, 'destroy'])->name('postagem.destroy');

});

// ------------------------------ BLOG ---------------------------------------------

Route::get('/blog/categoria', [BlogController::class, 'categoria'])->name('blog.categoria');

Route::get('/blog/categoria/{id}', [BlogController::class, 'categoriaPostagem'])->name('blog.categoriaPostagem');

Route::get('/blog/autor', [BlogController::class, 'autor'])->name('blog.autor');

Route::get('/blog/autor/{id}', [BlogController::class, 'autorPostagem'])->name('blog.autorPostagem');

Route::get('/blog/postagem/{id}', [BlogController::class, 'postagem'])->name('blog.postagem');

Route::post('blog/postagemComentario/{id}', [BlogController::class, 'postagemComentario'])->name('blog.postagemComentario')->middleware('auth');

Route::get('blog/curtida/{id}', [BlogController::class, 'curtida'])->name('blog.curtida')->middleware('auth');

