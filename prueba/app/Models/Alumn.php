<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use PhpParser\Node\Stmt\Return_;

class Alumn extends Model
{
    public $timestamps = false;

    public function equipo(): BelongsTo{
        return $this->belongsTo(Equipo::class)->withDefault(['nombre'=>'Sin equipo','id'=>'-1']);
    }

    public function materias():BelongsToMany{
        return $this->belongsToMany(Materia::class);
    }
}
