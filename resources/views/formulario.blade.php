<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>FORMULARIO</h1>
    <form action="/resultado" method="POST">
        @csrf
        <label for="nombre">NOMBRE:</label>
        <input type="text" id="nombre" name="nombre" required>
        <label for="edad">EDAD:</label>
        <input type="number" id="edad" name="edad" required>
        <br><br>
        <button type="submit">ENVIAR</button>
    </form>
</body>
</html>