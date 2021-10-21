<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delegacion extends Model
{
    use HasFactory;

    protected $table = "delegaciones";

    public function localidad()
    {
        return $this->belongsTo(Localidad::class);
    }
}
