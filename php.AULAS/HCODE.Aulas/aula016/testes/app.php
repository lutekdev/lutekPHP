<?php
require_once 'C:/Users/LutekDev/VSCode Projects/LANGUAGES.PROGRAMMING/PHP/lutekPHP/php.AULAS/HCODE.Aulas/aula016/main.php';
require_once 'C:/Users/LutekDev/VSCode Projects/LANGUAGES.PROGRAMMING/PHP/lutekPHP/php.AULAS/HCODE.Aulas/aula016/main.php';

/**
 * Require_Once: Faz com que você consiga chamar apenas uma vez mesmo que tenha duplicado a linha ou o arquivo seja chamado mais de uma vez.
 */

/**
 * Include: Tenta funcionar mesmo que o arquivo não exista e que exista algum problema, o include também tem um recurso onde ele procura uma biblioteca externa, configurando no arquivo php.ini, onde se ele não achar uma função no projeto, ele procura nessa pasta 'DEFAULT' que é configurada no php.ini, usado bastante esse recurso em projetos internos ou Intranet.
 * 
 * Require: Obriga que o arquivo exista e que o arquivo esteja funcionando corretamente, caso o contrário o require gera um erro fatal.
 */

$res = somar(10, 20);
echo "Somando: " . $res;
