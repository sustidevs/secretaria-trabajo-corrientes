<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HorarioAtencion extends Model
{
    use HasFactory;
    protected $table = 'horarios_atencion';

    public function oficinas()
    {
        $this->hasMany(Oficina::class);
    }
    
    public function dias()
    {
        $this->hasMany(Dia::class);
    }
}
