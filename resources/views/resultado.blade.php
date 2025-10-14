<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>
<body>
<h1>Compra registrada correctamente</h1>
<p><strong>Cliente:</strong> {{ $compra->cliente->nombre }}</p>
<p><strong>Producto:</strong> {{ $compra->producto }}</p>
<p><strong>Número de seguimiento:</strong> {{ $compra->numero_seguimiento }}</p>
</body>
</html>
