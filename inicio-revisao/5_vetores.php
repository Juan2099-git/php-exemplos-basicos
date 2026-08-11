<?php

// Vetor (array simples - "1 linha")
$frutas = ["Maça", "Banana", "Uva"];

// Exibindo os valores com laço
foreach ($frutas as $indice => $fruta) {
    echo "Posição $indice: $fruta <br>";
}

// Array (Linhas e colunas)

$matriz = [
    ["Max Verstappen", "Oscar Piastri", "Lando Norris"],
    ["Charles Leclerc", "Lewis Hamilton", "George Russel"],
    ["Fernando Alonso", "Carlos Sainz", "Gabriel Bortoleto"]
];

// Exibindo os valores da matriz
foreach ($matriz as $linha) {
    foreach ($linha as $piloto) {
        echo $piloto . " | ";
 }
 echo "<br>";
}