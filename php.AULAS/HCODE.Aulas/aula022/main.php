<?php

$frutas = array("Laranja, Maça, Abacaxi, Melancia");

// Para mostrar o array usa-se o 'print_r'
// print_r($frutas);

$carroMarca[0][0] = "Fiat";
$carroMarca[0][1] = "Uno";
$carroMarca[0][2] = "Palio";
$carroMarca[0][3] = "Gol";

print("===================" . PHP_EOL);

print "Eu tenho um carro: " . $carroMarca[0][0] . PHP_EOL;
print "Eu tenho um carro: " . $carroMarca[0][1] . PHP_EOL;
print "Eu tenho um carro: " . $carroMarca[0][2] . PHP_EOL;
print "Eu tenho um carro: " . $carroMarca[0][3] . PHP_EOL;

print("===================" . PHP_EOL);

print ("Qual meu Primeiro Carro: " . reset($carroMarca[0])) . PHP_EOL;
print("Qual meu Ultimo Carro: " . end($carroMarca[0]) . PHP_EOL);

print("===================" . PHP_EOL);

$pessoas = [];

array_push($pessoas, array(
    "nome" => "LutekDev",
    "idade" => "Desconhecida",
    "profissao" => "Garoto de Programa"
));

// print_r($pessoas);
// print_r($pessoas[0]["nome"]);

print("Eu me chamo: '" . $pessoas[0]["nome"] . "' eh tenho a idade '" . $pessoas[0]["idade"] . "' e trabalho como: '" . $pessoas[0]["profissao"] . "'" . PHP_EOL);
