<?php

// require "C:\Users\LutekDev\VSCode Projects\LANGUAGES.PROGRAMMING\PHP\lutekPHP\php.AULAS\HCODE.Aulas\aula025\config\config.php";

function somar($a, $b)
{
    return PHP_EOL . "A Soma Deu: " . ($a + $b) . PHP_EOL;
}

function generateNewId()
{
    ob_start();
    session_regenerate_id(true);
    ob_end_flush();
}
