<?php

// GERAR UM JSON APARTIR DE UM ARRAY

$pessoas = [];

array_push($pessoas, array(
    "nome" => "LutekDev",
    "idade" => 50
));

array_push($pessoas, array(
    "nome" => "Higor",
    "idade" => 18
));

array_push($pessoas, array(
    "nome" => "Gian",
    "idade" => 21
));

array_push($pessoas, array(
    "nome" => "Joao",
    "idade" => 20
));

$jsonEncode = json_encode($pessoas);

print ($jsonEncode) . PHP_EOL;


// TRANSFORMAR UM JSON EM ARRAY

// CASO FIQUE SEM O TRUE ELE RETORNA COMO 'OBJECT' E NÃO 'ARRAY'
$jsonDecode = json_decode($jsonEncode, true); 
print_r($jsonDecode);
