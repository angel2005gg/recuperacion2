<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class viajero extends Model
{
    use HasFactory;
    public function viaje()
    {
        return $this->hasMany(Viaje::class);
    }
}