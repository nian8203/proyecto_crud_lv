<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Usuario extends Controller
{
    public function saludo($nombre){
        return "Bienvenido usuario ".$nombre;
    }
}
