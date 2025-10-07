<?php

namespace App\Http\Controllers;

use App\Models\Carros;
use Illuminate\Http\Request;

class CarrosController extends Controller
{
    public function index(){
        $carros = Carros::all();
        //var_dump($carros);
        //compact()
        echo "Chegou no controller carros";

        return view('carros.index', compact('carros'));
    }

    public function cadastrar(){
        return view('carros.cadastrar');
    }

    public function salvarCarro(Request $request){

        //VALIDATE

        $carro = new Carros();
        $carro->marca = $request->input('marca');
        $carro->modelo = $request->input('modelo');
        $carro->cor = $request->input('cor');
        $carro->ano_fabricacao = $request->input('ano_fabricacao');

        $carro->save();

        return redirect()->route('carros.index');
    }
}
