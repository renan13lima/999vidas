<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class UserController extends Controller
{

    public function login()
    {
        return view('login');
    }

    public function loginvalidate(Request $request){

    $user_exist = User::where('email', $request->email)->exists();

        if (!$user_exist){
            //redirecionar para tela anterior mostrando mensagem login ou senha inválida
            return redirect('login')->with('status', 'ID de usuário ou senha incorreta.');

            //redirectback (mesma forma do create)

        }

        $user = User::where('email', $request->email)->first();

        if (Hash::check($request->password, $user->password)) {
            Auth::login($user);

            //redirecionar para dashboard
            return redirect('home');

        }else{
            //redirecionar para tela anterior mostrando mensagem login ou senha inválida
            return redirect('login')->with('status', 'Tente novamente');
        }
    }

    public function cadastro()
    {
        return view('cadastro');
    }

    public function cadastrar(Request $request){

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password=Hash::make($request->password);
        $user->save();

        return redirect('login')->with('status', 'USUÁRIO CADASTRADO COM SUCESSO');
    }

    public function logout(Request $request): RedirectResponse {

        Auth::logout();
        $request->session()->invalidate();

        return redirect('/');
    }



}
