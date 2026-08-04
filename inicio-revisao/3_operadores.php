<?php

// DeclaraçãO das variáveis
$idade = 19;
$temDocumento = true;

// Condicional com operador (E)
if ($idade >=18 && $temDocumento) {
    echo "Pode tirar a carteira";
} else {
    echo "Não pode tirar a carteira";
}

// DeclaraçãO das variáveis
$feriado = false;
$fimDeSemana = true;

// Condicional com operador (E)
if ($feriado || $fimDeSemana) {
    echo "\n Hoje não tem aula";
} else {
    echo "\n Não é feriado";
}

