<?php

$notas = [10, 7, 8, 5, 6];

$soma = 0;
$totalAlunos = count($notas);

$maiorNota = $notas[0];
$menorNota = $notas[0];

foreach ($notas as $nota) {
    $soma += $nota;

    if ($nota > $maiorNota) {
        $maiorNota = $nota;
    }

    if ($nota < $menorNota) {
        $menorNota = $nota;
    }
}


$media = $soma / $nota;


echo "Média da turma:" . number_format($media, 2, ',', '.') . "<br>";
echo "Maior nota:" . number_format($maiorNota, 2, ',', '.') . "<br>";
echo "Menor nota:" . number_format($menorNota, 2, ',', '.') . "<br>";