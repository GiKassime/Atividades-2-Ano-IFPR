<?php 
require_once 'models/Subtracao.php';
require_once 'models/Soma.php';
require_once 'models/Divisao.php';
require_once 'models/Resto.php';
require_once 'models/Multiplicacao.php';

do {
    echo "\nMENU\n1-Subtração\n2-Divisão\n3-Soma\n4-Resto\n5-Multiplicação\n";
    $resposta =  readline("DIGITE A OPERAÇÃO: ");
    $numA = readline("Digite o número A: ");
    $numB = readline("Digite o número B: ");
    if($numA == 0 && $numB == 0){
        break;
    }else{
            switch ($resposta) {
            case 1:
                echo "\nSUBTRAÇÃO\n";
                $operacao = new Subtracao($numA,$numB);
                echo $operacao->calcular();
                break; 
            case 2:
                echo "\nDIVISÃO\n";
                $operacao = new Divisao($numA,$numB);
                echo $operacao->calcular();
                break;
            case 3:
                echo "\nSOMA\n";

                $operacao = new Soma($numA,$numB);
                echo $operacao->calcular();
                break;
            case 4:
                echo "\nRESTO\n";

                $operacao = new Resto($numA,$numB);
                echo $operacao->calcular();
                break;
            case 5:
                echo "\nMULTIPLICAÇÃO\n";

                $operacao = new Multiplicacao($numA,$numB);
                echo $operacao->calcular();
                break;
            default:
                echo "\nOperação inválida";
                break;
        }  
    }
       
}while(true);

?>