<?php

$x = 10;
$y = 20;

/** PARA COLOCAR REFERENCIA EM UMA VARIÁVEL DE FUNÇÃO BASTA COLOCAR O & ANTES DO $ */
/** QUANDO COLOCAR REFERENCIA EM UMA VARIÁVEL, O VALOR ORIGINAL É ALTERADO PELO QUE ACONTECE DENTRO DA FUNÇÃO ALTERADO */
function somar(&$x, $y)
{
    return $x += $y;
}

$pessoa = array(
    "nome" => "Joaquim",
    "idade" => 20
);

foreach ($pessoa as &$value) {
    if (gettype($value) === "integer") $value += 10;
    print $value . PHP_EOL;
}

print_r($pessoa) . PHP_EOL;

// print(somar($x, $y)) . PHP_EOL;
// print $x;