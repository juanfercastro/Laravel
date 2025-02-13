<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Equipo extends Model
{
    public function jugadores():HasMany{
        return $this->hasMany(Jugador::class);
    }

    public function torneos():BelongsToMany{
        return $this->belongsToMany(Torneo::class);
    }
}
