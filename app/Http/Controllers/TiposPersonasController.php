<?php

namespace App\Http\Controllers;

use App\Models\TiposPersonas;
use Illuminate\Http\Request;

class TiposPersonasController extends Controller
{
    public function getTiposPersonas()
    {
        $tipos_personas = TiposPersonas::all();
        return response()->json([
            'statusCode' => 200,
            'statusMessage' => 'Consulta realizada correctamente',
            'result'  => $tipos_personas,
        ], 200);
    }
}
