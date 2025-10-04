<?php
$longitud = $_POST["longitud"];
$mayusculas = $_POST["mayusculas"] === "true";
$minusculas = $_POST["minusculas"] === "true";
$numeros = $_POST["numeros"] === "true";
$especiales = $_POST["especiales"] === "true";

if ($longitud >50 || $longitud < 4) {
    echo "ERROR: la longitud debe estar entre 4 y 50.";
    exit;
}

$caracteres = "";

if ($mayusculas)
    $caracteres .= "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
if ($minusculas)
    $caracteres .= "abcdefghijklmnopqrstuvwxyz";
if ($numeros)
    $caracteres .= "0123456789";
if ($especiales)
    $caracteres .= "!@#$%^&*()-_=+[]{};:,.<>?/";


if ($caracteres == "") {
    echo "ERROR: seleccioná al menos un tipo de carácter.";
    exit;
}

$password = "";
for ($i = 0; $i < $longitud; $i++) {
    $password .= $caracteres[random_int(0, strlen($caracteres) - 1)];
}

echo $password;
?>