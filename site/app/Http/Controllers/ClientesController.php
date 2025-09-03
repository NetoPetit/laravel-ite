<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientesController extends Controller
{

    public function index(){
        return view('index');
    }

    public function recebeDados(Request $request){

        $validar = $request->validate(
            [
                'nomeCompleto' => 'required|min:3',
                'cpf' => 'required',
                'dataNasc' => 'required',
                'email' => 'required|email',
                'endereco' => 'required'
            ],
            [
                'nomeCompleto.required' => 'O campo nome é obrigatório',
                'nomeCompleto.min' => 'O campo nome precisa de pelo menos min:',
                'cpf.required' => 'O campo cpf é obrigatório',
                'dataNasc.required' => 'O campo dataNasc é obrigatório',
                'email.required' => 'O campo email é obrigatório',
                'email.email' => 'O campo email é obrigatório ser email',
                'endereco.required' => 'O campo endereco é obrigatório'
            ]
        );
        /*
        $nomeCompleto = $request->input('nomeCompleto');
        $cpf = $request->input('cpf');
        $dataNasc = $request->input('dataNasc');
        $email = $request->input('email');
        $endereco = $request->input('endereco');
        echo "$nomeCompleto, $cpf, $dataNasc, $email, $endereco";*/
        return redirect()->route('cliente')->with('success', 'Cliente incluído com sucesso');
    }

    public function templateAdmin(){
        return view('template_admin.index');
    }

    public function clientesCadastro(){
        return view('clientes.cadastro');
    }

    public function produtos(){
        return view('produtos.index');
    }

}
