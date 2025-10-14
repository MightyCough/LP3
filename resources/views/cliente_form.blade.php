<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro Cliente</title>
</head>
<body>
<h1>Registrar Cliente y Dirección</h1>
<form method="POST" action="{{ url('/guardar-cliente') }}">
    @csrf
    <label>Nombre:</label>
    <input type="text" name="nombre" required><br>
    <label>Email:</label>
    <input type="email" name="email" required><br>
    <label>Dirección:</label>
    <input type="text" name="direccion" required><br>
    <label>Ciudad:</label>
    <input type="text" name="ciudad" required><br>
    <label>País:</label>
    <input type="text" name="pais" required><br>
    <button type="submit">Guardar</button>
</form>
</body>
</html>
