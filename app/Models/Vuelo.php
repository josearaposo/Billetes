<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vuelo extends Model
{
    use HasFactory;

    public function origen()
    {
        return $this->belongsTo(Aeropuerto::class);
    }

    public function destino()
    {
        return $this->belongsTo(Aeropuerto::class);
    }

    public function compania()
    {
        return $this->belongsTo(Compania::class);
    }

    public function reservas()
    {
        return $this->hasMany(Reserva::class);
    }
}
