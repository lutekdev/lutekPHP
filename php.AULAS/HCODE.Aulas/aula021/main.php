<?php

$condicao = true;

while ($condicao) {
    // Your Code Here
    $numero = rand(1, 60) . PHP_EOL;

    echo $numero;

    if ($numero == 10) {
        echo $numero;

        echo "Acertouuu!";

        $condicao = false;
    }
}
