<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TiposTramite extends Model
{
    use HasFactory;
    protected $table = "tipos_tramite";

    public function requisitos()
    {
        return $this->hasMany(Requisito::class);
    }
}
