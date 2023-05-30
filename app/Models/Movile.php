<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movile extends Model
{
    use HasFactory;
    protected $fillable = [
        'tipo_solicitud',
        'fecha_de_instalación',
        'numero_de_vehiculos',
        'Placa',
        'Tipo de vehiculo',
        'Lateral_izquierdo',
        'Lateral_derecho',
        'Posterior',
        'Area_Total',
    ];

    public function solicitude(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Solicitude::class);
    }

}
