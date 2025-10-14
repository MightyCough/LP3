<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Compra extends Model
{
     use HasFactory;
    protected $fillable = ['cliente_id', 'direccion_id', 'producto', 'cantidad', 'precio', 'numero_seguimiento'];

    public function cliente() {
        return $this->belongsTo(Cliente::class);
    }

    public function direccion() {
        return $this->belongsTo(Direccion::class);
    }
}
