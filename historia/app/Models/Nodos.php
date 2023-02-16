<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nodos extends Model
{
    use HasFactory;

    public function links()
    {
        return $this->belongsToMany(Links::class, 'id_nodo_destino_link', 'id_nodo_origen_link', 'id');
    }
}
