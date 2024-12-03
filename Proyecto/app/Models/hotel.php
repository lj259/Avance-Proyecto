<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class hotel extends Model
{
    public function destino()
    {
        return $this->belongsTo(destino::class);
    }
}
