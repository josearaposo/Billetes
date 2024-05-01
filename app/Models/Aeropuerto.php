<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aeropuerto extends Model
{
    use HasFactory;

    public function vuelosOrigen()
    {
        return $this->hasMany(Vuelo::class);
    }

    public function vuelosDestino()
    {
        return $this->hasMany(Vuelo::class);
    }

}
