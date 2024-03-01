<?php

require_once 'config\config.php';
require_once 'func\index.php';

$_SESSION["nome"] = "LutekInc";

print "O nome da 'Session' é: " . $_SESSION["nome"];
print somar(5, 2);
