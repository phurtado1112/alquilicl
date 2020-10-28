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

    public function clientes() {
        return $this->belongsTo(Cliente::class);
    }

    public function programas() {
        return $this->belongsTo(Programa::class);
    }

    public function users() {
        return $this->belongsTo(User::class);
    }
}
