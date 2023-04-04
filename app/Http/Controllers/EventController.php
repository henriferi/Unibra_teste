<?php

namespace App\Http\Controllers;

use App\Http\Requests\Validacoes;
use Illuminate\Http\Request;

use App\Models\Unibra_usuarios;

class EventController extends Controller
{
    public function index() {
        return view('autentificacao');
    }

    public function cadastrar() {

        $events = Unibra_usuarios::all();

        return view('cadastro', ['events' => $events]);
    }

    public function recuperarSenha () {
        return view('recuperarSenha');
    }

    public function dashboard () {
        $unibra_usuarios = Unibra_usuarios::where('nome_completo', 'Henrique')->first();

        return view('dashboard')->with('unibra_usuarios', $unibra_usuarios);
    } 

    public function redefinirSenha() {
        return view('redefinirSenha');
    }

    public function store(Validacoes $request) {
        $event = new Unibra_usuarios;
        
        $event->nome_completo = $request->nome_completo;
        $event->cpf = $request->cpf;
        $event->email = $request->email;
        $event->senha = $request->senha;

        $event->save();
        return redirect('/dashboard');
    }
    
}

