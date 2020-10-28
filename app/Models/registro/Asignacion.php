<?php

namespace App\Models\registro;

use App\Models\catalogo\Cliente;
use App\Models\catalogo\Programa;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asignacion extends Model
{
    use HasFactory;

    public function cliente() {
        return $this->belongsTo(Cliente::class, 'id', 'cliente_id');
    }

    public function programa() {
        return $this->belongsTo(Programa::class, 'id', 'programa_id');
    }

    public function user() {
        return $this->belongsTo(User::class, 'id', 'user_id');
    }
}
