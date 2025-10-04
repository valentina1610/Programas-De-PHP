<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generador de contraseñas</title>
    <!-- CSS de Bootstrap -->
    <link href="recursos/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Tus estilos CSS -->
    <link href="css/estilos.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-4">
        <h2 class="text-center mb-4">Generador de contraseñas seguras</h2>

        <div class="mb-3">
            <label for="longitud" class="form-label">Longitud de la contraseña:</label>
            <input type="number" class="form-control" name="longitud" id="longitud" min="4" max="50" required>
        </div>

        <div class="mb-3">
            <label>Criterios:</label>
            <div>
                <input type="checkbox" name="mayusculas" id="mayusculas">
                <label for="mayusculas">Mayúsculas (A-Z)</label>
            </div>
            <div>
                <input type="checkbox" name="minusculas" id="minusculas">
                <label for="minusculas">Minúsculas (a-z)</label>
            </div>
            <div>
                <input type="checkbox" name="numeros" id="numeros">
                <label for="numeros">Números (0-9)</label>
            </div>
            <div>
                <input type="checkbox" name="especiales" id="especiales">
                <label for="especiales">Caracteres especiales (!@#$...)</label>
            </div>
        </div>

        <button id="boton-generar" class="btn btn-primary">Generar contraseña</button>
        <p class="mt-3">Resultado contraseña: <span id="resultado"></span></p>

    </div>

    <script src="recursos/jquery/jquery.min.js"></script>
    <script src="recursos/bootstrap/bootstrap.min.js"></script>
    <script src="js/app.js"></script>
</body>

</html>