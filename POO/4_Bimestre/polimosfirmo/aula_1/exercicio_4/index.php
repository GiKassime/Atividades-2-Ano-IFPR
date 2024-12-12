<?php 
require_once 'models/Van.php';
require_once 'models/Carro.php';
require_once 'models/MicroOnibus.php';
require_once 'models/Onibus.php';
do {
    echo "\nTIPO VEÍCULO\n1-VAN\n2-CARRO\n3-MICRO-ONIBUS\n4-ONIBUS\n0-SAIR\n";
    $resposta =  readline("DIGITE O TIPO DE VEÍCULO: ");
    $aluguel = readline("Digite o valor do aluguel pago: ");
    $qtdKm = readline("Digite a quantidade de km rodados: ");
    
    
        switch ($resposta) {
        case 1:
            $veiculo = new Van($aluguel,$qtdKm);
            break; 
        case 2:
            $veiculo = new Carro($aluguel,$qtdKm);
            break;
        case 3:
            $veiculo = new MicroOnibus($aluguel,$qtdKm);
            break;
        case 4:
            $veiculo = new Onibus($aluguel,$qtdKm);
            break;
        case 0:
            echo "\nSAINDO\n";
        default:
            echo "\nTipo inválido";
            break;
    }  
    
    echo $veiculo;
       
}while(true);

?>