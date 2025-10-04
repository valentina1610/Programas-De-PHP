<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de IMC</title>
    <!-- CSS de Bootstrap -->
    <link href="recursos/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Tus estilos CSS -->
    <link href="css/estilos.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-4">
        <h2>Calculadora de IMC/h2>

            <div class="mb-3">
                <label>Peso (kg):</label>
                <input type="number" id="peso" class="form-control">
            </div>
            <div class="mb-3">
                <label>Altura (m):</label>
                <input type="number" id="altura" class="form-control" step="0.01">
            </div>
            <button id="boton-calcular" class="btn btn-primary">Calcular</button>

            <p class="mt-3"><span id="resultado"></span></p>

    </div>

    <!-- jQuery -->
    <script src="recursos/jquery/jquery.min.js"></script>

    <!-- JS de Bootstrap -->
    <script src="recursos/bootstrap/bootstrap.min.js"></script>

    <!-- Tu JS -->
    <script src="js/app.js"></script>
</body>

</html>