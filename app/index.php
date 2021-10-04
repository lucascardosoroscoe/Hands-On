<?php
include('FrasesMotivacionais.php');

$dia = $_GET['dia'];

$frase = new FrasesMotivacionais(new FraseDeSabado());
switch($dia){
    case '1': 
        $frase->setFrase(new FraseDeDomingo());
        $frase->exibirFrase();
        break;
    case '2': 
        $frase->setFrase(new FraseDeSegunda());
        $frase->exibirFrase();
        break;
    case '3': 
        $frase->setFrase(new FraseDeTerca());
        $frase->exibirFrase();
        break;
    case '4': 
        $frase->setFrase(new FraseDeQuarta());
        $frase->exibirFrase();
        break;
    case '5': 
        $frase->setFrase(new FraseDeQuinta());
        $frase->exibirFrase();
        break;
    case '6': 
        $frase->setFrase(new FraseDeSexta());
        $frase->exibirFrase();
        break;
    case '7': 
        $frase->exibirFrase();
        break;
    default:
        echo "Dia da semana inválido";
}
