<?php
$dia = 8;
$mensagem = "";

switch ($dia) {
    case 1:
        $mensagem = "Domingo";
        break;
    case 2:
        $mensagem = "Segunda feira";
        break;
    case 3:
        $mensagem = "Terça feira";
        break;
    case 4:
        break;
    case 5:
        $mensagem = "Quarta Feira";
        break;
    case 6:
        $mensagem = "Quinta feira";
        break;
    case 7:
        $mensagem = "Sexta feira";
        break;
    case 8:
        $mensagem = "Sábado";
        break;
    default:
        $mensagem = "Dia inválido";
        break;
}

echo $mensagem; // Saída: Terça-feira
?>