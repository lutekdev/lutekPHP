<?php

$nome = "Lutek"; // String
$sobrenome = "Dev"; // String
$idade = 20; // Inteiro
$anoNascimento = 2023 - $idade; // Inteiro
$alturaMetros = 1.72; // Float

// echo $nome . " " . $sobrenome .  " tem " . $idade . " anos e nasceu em " . $anoNascimento . " e mede " . $alturaMetros . " metros";

// if (isset($nomeCompleto)) {
//     echo "\n" . $nomeCompleto . " Realmente Existe";
// } else {
//     echo "\n" . "Essa variavel 'Não Existe'";
// }

// TIPOS DE DADOS

// TIPOS BÁSICOS

$nome = "LutekDev"; // String
$ano = 2024; // Inteiro
$salario = 5500.99; // Float
$bloqueado = false; // Booleano
///////////////////////////

// TIPOS COMPOSTOS
$frutas = array("Laranja", "Abacaxi", "Melancia"); // Array
// echo "\n\nEssa Fruta Se Chama " . $frutas[1]  . "\n\n";

$nascimento = new DateTime(); // Objeto
// echo var_dump($nascimento);
///////////////////////////

// TIPOS ESPECIAIS

$arquivo = fopen("README.md", "r"); // RESOURCE
// var_dump($arquivo);

$nulo = null; // NULL >> AUSÊNCIA DE VALOR
$vazio = ""; // VAZIO >> TEM VALOR MAS NÃO FOI INICIADA
///////////////////////////
