<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Jugador extends Model
{
    public function equipo():BelongsTo{
        return $this->belongsTo(Equipo::class);
    }
}
