<?php

// Operadores de Atribuição
$nome = "Lutek"; // Atribuição
$nome .= "Dev";

echo ("Atribuição na Variavel: " . $nome . "\n");
echo ("Concatenação: " . "Lutek" . " Dev");
echo ("\n\n");

// Operadores de Atribuição com Operadores Aritmeticos

$valorTotal = 0;
$valorTotal += 25;
$valorTotal *= .9;

echo ("Meu Valor Total: " . $valorTotal);
echo ("\n\n");

// Operadores Aritimeticos

$a = 10;
$b = 2;

echo $a + $b; // Soma
echo ("\n");

echo $a - $b; // Subtração
echo ("\n");

echo $a * $b; // Multiplicação
echo ("\n");

echo $a / $b; // Divisão
echo ("\n");

echo $a % $b; // Resto
echo ("\n");

echo $a ** $b; // Potência
echo ("\n\n");


// Operadores de Comparação

var_dump($a == $b); // Igualdade
echo ("\n");

var_dump($a > $b); // Maior
echo ("\n");

var_dump($a < $b); // Menor
echo ("\n");

var_dump($a >= $b); // Maior Igual
echo ("\n");

var_dump($a <= $b); // Menor Igual
echo ("\n");

var_dump($a != $b); // Diferente
echo ("\n\n");
