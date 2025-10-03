<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de propina</title>
    <!-- CSS de Bootstrap -->
    <link href="recursos/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Tus estilos CSS -->
    <link href="css/estilos.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-4">
        <h2>Calculadora de propinas</h2>

        <div class="mb-3">
            <label>Monto total de la cuenta:</label>
            <input type="number" id="campo-cuenta" class="form-control" step="0.01">
        </div>
        <div class="mb-3">
            <label>Porcentaje de propina (%):</label>
            <input type="number" id="campo-propina" class="form-control" step="1">
        </div>
        <button id="boton-calcular" class="btn btn-primary">Calcular</button>

        <p class="mt-3">Propina: <span id="resultado-propina"></span></p>
        <p>Total a pagar: <span id="resultado-total"></span></p>
    </div>

     <!-- jQuery -->
    <script src="recursos/jquery/jquery.min.js"></script>

    <!-- JS de Bootstrap -->
    <script src="recursos/bootstrap/bootstrap.min.js"></script>

    <!-- Tu JS -->
    <script src="js/app.js"></script>
</body>

</html>