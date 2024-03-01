<?php

// CRIANDO UMA CONSTANTE
define("NOME", "LutekDev");
define("SERVIDOR", "localhost");

define("ARRAY_NUMEROS", [1, 2, 3, 4, 5]);

const MEU_IP = "127.0.0.1";

// print (NOME) . PHP_EOL;
// print(SERVIDOR . PHP_EOL);
// print MEU_IP . PHP_EOL;

const CONN = [
    "127.0.0.1",
    "root",
    "password",
    "test"
];

// print_r(ARRAY_NUMEROS);
foreach (CONN as $index => $value) {
    print $index . " = " . $value . PHP_EOL;
}
