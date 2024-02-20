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

$a = 2;
$b = 10;
$c = NULL;

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
echo ("\n");

var_dump($a === $b); // Igualguade de Tipos
echo "\n";

var_dump($a !== $b); // Diferente de Tipos
echo "\n\n";

// SpaceShip

var_dump($a <=> $b);
// Faz uma comparação entre os valores se for maior retorna o $a se for menor retorna $b se forem iguais retorna 0

// $a => 1;
// $b => -1
// == => 0

echo "\n\n";

// Null Coalescing

echo $a ?? $b ?? $c; // Sempre para num valor verdadeiro e retorna o valor

/**
 * $a = NULL;
 * $b = NULL;
 * $c = 10;
 * 
 * echo $a ?? $b ?? $c;
 * 
 * Resultado é $c pois é o unico verdadeiro = 10.
 */

echo "\n\n";


// Operador de Incremento e Decremento

echo $a++; // Incremento Post
echo "\n";

echo $a;

echo "\n\n";

echo $b--; // Decremento Post
echo "\n";

echo $b;

echo "\n\n";

echo ++$a; // Incremento Pre
echo "\n";

echo $a;

echo "\n\n";

echo --$b; // Decremento Pre
echo "\n";

echo $b;

echo "\n\n";


/** 
 * A Diferença entre o Incremento Antes e Depois:
 * 
 * Antes: ++$a;
 * Depois: $a++;
 * 
 * Antes:
 *  - Faz com que o valor seja incrementado antes da atribuição ou seja antes de ser calculado no programa;
 * 
 * Depois:
 *  - Faz com que o valor seja incrementado depois da atribuição ou seja depois de ser calculado no programa.
 */

// Precendence

/**
 * Precedencia:
 *  - 1. ()
 *  - 2. ** 
 *  - 3. * / % 
 *  - 4. + - 
 *  - 5. == != < > <= >= 
 *  - 6. &&  
 *  - 7. || 
 *  - 8. ? :
 */