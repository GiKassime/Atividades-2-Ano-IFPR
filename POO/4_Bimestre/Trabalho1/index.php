<?php 
require_once 'models/Desenvolvedor.php';
require_once 'models/Gerente.php';
require_once 'models/Estagiario.php';

do {
    echo "\n\nCARGOS\n1-GERENTE\n2-ESTÁGIARIO\n3-DESENVOLVEDOR\n0-SAIR\n";
    $resposta =  readline("DIGITE O CARGO DO FUNCIONÁRIO: ");
    if ($resposta == 0) {
        echo "\nSAINDO\n";
        break;
    }
    $nome = readline("Digite o nome do funcionário: ");
        switch ($resposta) {
        case 1:
            $funcionario = new Gerente($nome);
            break; 
        case 2:
            $funcionario = new Estagiario($nome);
            break;
        case 3:
            $funcionario = new Desenvolvedor($nome);
            break;
        default:
            echo "\nTipo inválido";
            break;
    }  
    
    echo $funcionario;
}while(true);
?>