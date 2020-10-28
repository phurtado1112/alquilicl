<?php

namespace App\Models\catalogo;

use App\Models\registro\Asignacion;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
    use HasFactory;

    public function asignacion() {
        return $this->hasMany(Asignacion::class, 'programa_id', 'id');
    }
}
