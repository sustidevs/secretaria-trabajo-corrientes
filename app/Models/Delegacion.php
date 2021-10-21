<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delegacion extends Model
{
    use HasFactory;

    protected $table = "delegaciones";

    public function oficinas()
    {
        return $this->hasMany(Oficina::class);
    }
        
    public function localidad()
    {
        return $this->belongsTo(Localidad::class);
    }
}
