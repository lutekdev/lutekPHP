<?php

$nome = "lutek dev";

echo "O nome digitado foi: $nome\n\n";

// Deixar Tudo em Maisculo

echo strtoupper($nome . "\n\n");

// Deixar Tudo em Minusculo

echo strtolower($nome . "\n\n");

// Deixar Primeira Letra em Maiscula

echo ucfirst($nome . "\n\n");

// Deixar Primeira Letra de Cada Palavra em Maiscula

echo ucwords($nome . "\n\n");

// Retirar Espacos
echo trim(" ", $nome);

// Retirar Espacos de Toda String
echo str_replace(" ", "", $nome);
