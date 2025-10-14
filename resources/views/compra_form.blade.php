<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Compra</title>
</head>
<body>
<h1>Registrar Compra</h1>
<form method="POST" action="{{ url('/guardar-compra') }}">
    @csrf
    <label>Cliente:</label>
    <select name="cliente_id" id="cliente" required>
        <option value="">Seleccione...</option>
        @foreach($clientes as $cliente)
            <option value="{{ $cliente->id }}">{{ $cliente->nombre }}</option>
        @endforeach
    </select><br>

    <label>Dirección:</label>
    <select name="direccion_id" required>
        @foreach($clientes as $cliente)
            @foreach($cliente->direcciones as $dir)
                <option value="{{ $dir->id }}">{{ $dir->direccion }} ({{ $cliente->nombre }})</option>
            @endforeach
        @endforeach
    </select><br>

    <label>Producto:</label>
    <input type="text" name="producto" required><br>
    <label>Cantidad:</label>
    <input type="number" name="cantidad" required><br>
    <label>Precio:</label>
    <input type="number" step="0.01" name="precio" required><br>
    <button type="submit">Registrar Compra</button>
</form>
</body>
</html>
