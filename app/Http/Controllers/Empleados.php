<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class Empleados extends Controller
{

    public function tiempo(){
        $tiempo=[
            'Cordoba'=>[
                'min'=>8,
                'max'=>30,
                'clima'=>20,
                'humedad'=>25,
                'clima_actual'=>23,
                'pronostico'=>'bueno'
            ],
            'Almeria'=>[
                'min'=>8,
                'max'=>30,
                'clima'=>20,
                'humedad'=>25,
                'clima_actual'=>23,
                'pronostico'=>'bueno'
            ],
            'Cadiz'=>[
                'min'=>8,
                'max'=>30,
                'clima'=>20,
                'humedad'=>25,
                'clima_actual'=>23,
                'pronostico'=>'malo'
            ],
            'Sevilla'=>[
                'min'=>8,
                'max'=>30,
                'clima'=>20,
                'humedad'=>25,
                'clima_actual'=>23,
                'pronostico'=>'bueno'
            ],
        ];
        return response()->json($tiempo);
    }
}
