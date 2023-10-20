<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneradorController extends Controller
{
    public function imprimir()
    {
        $pdf = \PDF::loadView('cliente.ejemplo');
        return $pdf->download('Nombre del archivo.pdf');
    }
}
