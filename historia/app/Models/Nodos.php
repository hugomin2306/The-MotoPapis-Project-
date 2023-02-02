<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nodos extends Model
{
    use HasFactory;

    public function links()
    {
        return $this->hasMany(Links::class, 'id_nodo_origen_link', 'id');
    }
}
