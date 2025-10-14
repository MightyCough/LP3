<?php
namespace App\Http\Controllers;

use App\Models\Compra;
use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CompraController extends Controller
{
    public function crear()
    {
        $clientes = Cliente::with('direcciones')->get();
        return view('compra_form', compact('clientes'));
    }

    public function guardar(Request $request)
    {
        $request->validate([
            'cliente_id' => 'required|exists:clientes,id',
            'direccion_id' => 'required|exists:direcciones,id',
            'producto' => 'required|string|max:255',
            'cantidad' => 'required|integer|min:1',
            'precio' => 'required|numeric|min:0',
        ]);

        $seguimiento = strtoupper(Str::random(10));

        $compra = Compra::create([
            'cliente_id' => $request->cliente_id,
            'direccion_id' => $request->direccion_id,
            'producto' => $request->producto,
            'cantidad' => $request->cantidad,
            'precio' => $request->precio,
            'numero_seguimiento' => $seguimiento,
        ]);

        return view('resultado', compact('compra'));
    }
}