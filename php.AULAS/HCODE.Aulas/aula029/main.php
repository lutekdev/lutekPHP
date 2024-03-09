<?php

function ola($texto)
{
    return "Hello, '$texto'" . PHP_EOL;
}

function checandoParametros()
{
    $args = func_get_args();

    return $args;
}

var_dump(
    checandoParametros(
        "LutekDev",
        "Friends",
        "Coders",
        10,
        false,
        null,
        (function () {
            return true and true;
        })
    )
);

// print ola("LutekDev");
// print ola("Friends");
// print ola("Coders");