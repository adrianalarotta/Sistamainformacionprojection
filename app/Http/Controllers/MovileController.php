<?php

namespace App\Http\Controllers;

use App\Models\movile;
use Illuminate\Http\Request;


class movileController extends Controller
{

    public function store(Request $request)
{
    $movile = new Movile;
    $movile->tipo_solicitud = $request->tipo_solicitud;
    $movile->fecha_de_instalacion= $request->fecha_de_instalacion;
    $movile->numero_de_vehiculos = $request->numero_de_vehiculos;
    $movile->placa = $request->placa;
    $movile->tipo_de_vehiculo = $request->tipo_de_vehiculo;
    $movile->Lateral_izquierdo = $request->Lateral_izquierdo;
    $movile->Lateral_derecho =$request-> Lateral_derecho ;
    $movile->Posterior = $request->Posterior;
    $movile->Area_Total= $request->Area_Total;
    $movile->save();
    return true;
}

}
