<?php

namespace App\Http\Controllers;

use App\Models\Car;

class CarController extends Controller
{
    public function index()
    {
        $carros = Car::all();
        return view('carros.index', compact('carros'));
    }
}
