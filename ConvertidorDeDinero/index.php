<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convertidor de dinero</title>
    <!-- CSS de Bootstrap -->
    <link href="recursos/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Tus estilos CSS -->
    <link href="css/estilos.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-4">
        <h2>Convertidor de dinero</h2>

        <div class="mb-3">
            <label for="monto">Monto a convertir:</label>
            <input type="number" id="monto" class="form-control" step="0.01">
        </div>
        <div class="mb-3">
            <label for="moneda-origen">Moneda de origen:</label>
            <select id="moneda-origen" class="form-select">
                <option value="dolar">Dolar</option>
                <option value="peso-argentino">Peso argentino</option>
                <option value="euros">Euros</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="moneda-destino">Moneda de destino:</label>
            <select id="moneda-destino" class="form-select">
                <option value="dolar">Dolar</option>
                <option value="peso-argentino">Peso argentino</option>
                <option value="euros">Euros</option>
            </select>
        </div>
        <button id="boton-calcular" class="btn btn-primary">Calcular</button>

        <p class="mt-3">Resultado: <span id="resultado"></span></p>
    </div>

    <!-- jQuery -->
    <script src="recursos/jquery/jquery.min.js"></script>

    <!-- JS de Bootstrap -->
    <script src="recursos/bootstrap/bootstrap.min.js"></script>

    <!-- Tu JS -->
    <script src="js/app.js"></script>
</body>

</html>