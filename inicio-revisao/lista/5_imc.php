<?php

$peso = 52;
$altura = 1.64;

function calcularIMC(float $peso, $altura): float {
    return $peso / ($altura * $altura);
}

$imc = calcularIMC($peso, $altura);

if ($imc < 18.5) {
    echo "Abaixo do peso";
} elseif ($imc < 24.9) {
    echo "Peso normal.";
} elseif ($imc < 29.9) {
    echo "Sobrepeso";
} elseif ($imc < 34.9) {
    echo "Obesidade";
}