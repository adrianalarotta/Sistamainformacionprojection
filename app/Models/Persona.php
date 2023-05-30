<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $fillable = ['nombre', 'apellido','tipo_de_documento','numero_de_documento','tipo_de_persona', 'Razon_Social_Responsable','correo_electronico', 'direccion'];

    public function personas_naturales(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(Personas_Naturales::class);
    }
}

