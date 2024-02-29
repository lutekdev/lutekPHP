<?php

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

$minhaIdade = 22;


if ($minhaIdade < $idadeCrianca) {
    echo "Criança";
} elseif ($minhaIdade < $idadeMaior) {
    echo "Adolescente";
} elseif ($minhaIdade < $idadeMelhor) {
    echo "Adulto";
} else {
    echo "Idoso";
}

echo $minhaIdade < $idadeMaior ? "\nMenor de Idade" : "\nMaior De Idade";
