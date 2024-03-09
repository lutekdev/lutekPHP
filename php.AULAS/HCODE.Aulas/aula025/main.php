<?php

require_once 'config\config.php';
require_once 'func\index.php';

$_SESSION["nome"] = "LutekInc";

/** UMA SESSÃO DURA EM VOLTA DE 20 MINUTOS, MAS PODE SER CONFIGURADA. */
print "O nome da 'Session' é: " . $_SESSION["nome"];
print somar(5, 2);

print "===================" . PHP_EOL;

print "O ID de Sessão do Usuário eh: " . session_id() . PHP_EOL;

print "===================" . PHP_EOL;

// session_unset(); Usado para limpar as variáveis de sessão;
// session_destroy(); Usado para limpar a sessão e as variáveis de sessão ou seja ele vai remover o usuário da sessão;