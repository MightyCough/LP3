<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Direccion extends Model
{
   use HasFactory;
    protected $fillable = ['cliente_id', 'direccion', 'ciudad', 'pais'];

    public function cliente() {
        return $this->belongsTo(Cliente::class);
    }
}
