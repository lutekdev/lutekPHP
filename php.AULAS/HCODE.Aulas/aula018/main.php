<?php

// $diaSemana = date("w");
$diaSemana = 5;

switch ($diaSemana) {
    case 0:
        echo "Sabado";
        break;
    case 1:
        echo "Domingo";
        break;

    case 2:
        echo "Segunda_Feira";
        break;

    case 3:
        echo "Terça_Feira";
        break;

    case 4:
        echo "Quarta_Feira";
        break;

    case 5:
        echo "Quinta_Feira";
        break;

    default:
        echo "Não existe";
        break;
}
