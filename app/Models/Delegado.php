<?php

namespace App\Models;

use App\Models\User;
use App\Models\Oficina;
use App\Models\Delegacion;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Delegado extends Model
{
    use HasFactory;

    public function delegacion()
    {
        $this->belongsTo(Delegacion::Class);
    }

    public function oficina()
    {
        $this->hasOne(Oficina::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
