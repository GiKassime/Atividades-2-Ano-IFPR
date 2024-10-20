<?php 
require_once 'models/Comercial.php';
require_once 'models/Industrial.php';
require_once 'models/Residencial.php';

do {
    //MENU
    echo"\n----------MENU DE FATURAS----------\n1-RESIDENCIAL\n2-COMERCIAL\n3-INDUSTRIAL\n0-SAIR\n";
    $resposta = readline("Digite sua resposta: ");
    //OPCOES
    switch ($resposta) {
        case 1:
            //RESIDENCIAL
            echo "\n______RESIDENCIAL______\n";
            $fatura = new Residencial();
            echo "\n. . . .Calcular valor da fatura Residencial. . . .\n";
            break;
        case 2:
            //COMERCIAL
            echo "\n______COMERCIAL______\n";
            $fatura = new Comercial();
            echo "\n. . . .Calcular valor da fatura Comercial. . . .\n";
        break;
        case 3:
            //INDUSTRIAL
            echo "\n______INDUSTRIAL______\n";
            $fatura = new Industrial();
            echo "\n. . . .Calcular valor da fatura Industrial. . . .\n";
        break;
        case 0:
            echo "\nSaindo...\n";
            exit;
        break;
        default:
            echo "\nResposta Inválida digite novamente...\n";
        break;
    }
    $consumo = readline("Qual o consumo em KWh? :");
    while (!is_numeric($consumo) || $consumo <= 0) {
        $consumo = readline("Tente digitar um valor numérico e maior que 0!!: ");
    }//Me defendendo do usuário  :)

    $fatura->setConsumo($consumo);
    echo "O valor da fatura com o consumo de ".$fatura->getConsumo()."KWh é igual a : R$".number_format($fatura->getValorFatura(),2,',','.')."\n";
    //number format  para arredondar a duas casas decimais  e colocar virgula invés do ponto :)
} while ($resposta != 0);
?>