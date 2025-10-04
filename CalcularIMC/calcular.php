<?php
$peso = floatval(value: $_POST["peso"]);
$altura = floatval(value: $_POST["altura"]);

if ($peso > 0 && $altura > 0) {
    $imc = $peso / ($altura * $altura);
    $imc = round($imc, 2);
} else {
    echo "ERROR: Peso y altura deben ser mayores que cero.";
    exit;
}
if ($imc < 18.5) {
    $mensaje = "Bajo peso";
    $color = "blue";
} elseif ($imc < 25) {
    $mensaje = "Peso normal";
    $color = "green";
} elseif ($imc < 30) {
    $mensaje = "Sobrepeso";
    $color = "orange";
} else {
    $mensaje = "Obesidad";
    $color = "red";
}

echo "
          Tu IMC es: $imc
          <p style='color:$color; font-weight:bold;'>E indica que tienes: $mensaje</p>
        ";

?>