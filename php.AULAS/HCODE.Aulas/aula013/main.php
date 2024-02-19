<?php

$nome = "LutekDev";

echo "===============================\n";

function teste()
{
    global $nome;
    echo "Teste 01 - " . $nome . "\n\n";
}

function teste2()
{
    global $nome;
    echo "Teste 02 - " . $nome;
}


teste();
teste2();

echo "\n===============================";
