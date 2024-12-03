<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class vuelo extends Model
{
    // En App\Models\Vuelo
    public function escalas()
    {
        return $this->hasMany(escala::class);
    }
    public function destino()
    {
        return $this->belongsTo(destino::class);
    }

}
