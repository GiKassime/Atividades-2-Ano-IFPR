<?php 
require_once ("models/Retangulo.php");
require_once ("models/Circulo.php");
require_once ("models/Quadrado.php");
do {
    //MENU
    echo"\n----------MENU----------\n1-QUADRADO\n2-RETANGULO\n3-CIRCULO\n0-SAIR\n";
    $resposta = readline("Digite sua resposta: ");
    //OPCOES
    switch ($resposta) {
        case 1:
            //QUADRADO
            echo "\n______QUADRADO______\n";
            $forma = new Quadrado();
            $forma->setLado(readline("INFORME O LADO DO QUADRADO: "));
            echo "\nA area do quadrado é ";
            break;
        case 2:
            //RETANGULO
            echo "\n______RETANGULO______\n";
            $forma = new Retangulo();
            $forma->setBase(readline("INFORME A BASE DO RETANGULO: "));
            $forma->setAltura(readline("INFORME A ALTURA DO RETANGULO: "));
            echo "\nA area do retangulo é ";
        break;
        case 3:
            //CIRCULO
            echo "\n______CIRCULO______\n";
            $forma = new Circulo();
            $forma->setRaio(readline("INFORME O RAIO DO CIRCULO: "));
            echo "\nA area do circulo é ";
        break;
        case 0:
            echo "\nSaindo...\n";
        break;
        default:
            echo "\nResposta Inválida digite novamente...\n";
        break;
    }
    echo $forma->getArea()."\n";
    echo $forma->getDesenho();
} while ($resposta != 0);
?>