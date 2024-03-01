<?php

require_once 'config\config.php';
require_once 'func\index.php';

$_SESSION["nome"] = "LutekInc";

print "O nome da 'Session' é: " . $_SESSION["nome"];
print somar(5, 2);

print "===================" . PHP_EOL;

print "O ID de Sessão do Usuario eh: " . session_id() . PHP_EOL;

print "===================" . PHP_EOL;

// session_unset();
// session_destroy();