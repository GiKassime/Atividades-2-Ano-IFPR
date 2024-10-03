<?php 
require_once 'models/Prato.php';
require_once 'models/Pedido.php';

function listar($array){
    if (count($array) > 0) {
        foreach ($array as $valor) {
        echo "\n". $valor;
        }
    }else{
        echo "\nNão há nada cadastrado\n";
    }
    
}
function busca($array,$resposta){
        foreach ($array as $value) {
            if($value->getNumero() == $resposta){
                return $value;
            }
        }
        return null;
}
$pratos = array(
    new Prato(1,"Camarão a Milanesa", 110),
    new Prato(2,"Pizza Margherita", 80), 
    new Prato(3,"Macarrão a Carbonara", 60), 
    new Prato(4,"Bife a Parmegiana", 75),
    new Prato(5,"Risoto ao Funghi",70)
);

$pedidos = array();

do {
    echo"\n----------MENU----------\n1- Cadastrar Pedido\n2-Cancelar Pedido\n3-Listar Pedidos\n4-Total de vendas\n0-SAIR\n";
    $resposta = readline("Digite sua resposta: ");
    switch ($resposta) {
        case 1:
            //Cadastrar
            echo "\n---------------PRATOS--------------\n";
            echo "NÚMERO         NOME           VALOR";
            listar($pratos);
            echo "\n\n";
            $nomeCliente = readline("Informe o nome do cliente: ");
            $nomeGarcom = readline("Informe o nome do garçom: ");
            $prato = null;
            while($prato == null){
                $prato = busca($pratos,readline("Informe o número do prato: "));
            }
            array_push($pedidos, new Pedido($nomeCliente,$nomeGarcom, $prato, (count($pedidos)+1)));
            echo "\n----------PEDIDO CADASTRADO----------\n";
            break;
        case 2:
            //Cancelar
            echo "\n---------------PEDIDOS FEITOS--------------\n";
            listar($pedidos);
            echo "\n";
            $pedido = null;
            while($pedido == null){
                $pedido = busca($pedidos,readline("Qual o índice do pedido a ser excluido? : "));
            }
            unset($pedidos[($pedido->getNumero() - 1)]);
            echo "\n----------PEDIDO EXCLUIDO----------\n";

        break;
        case 3:
            //Listar
            echo "\n---------------PEDIDOS FEITOS--------------\n";
            listar($pedidos);
            echo "\n";
        break;
        case 4:
            //Total de vendas
            $somaValor = 0;
            foreach ($pedidos as $pedido) {
                $somaValor += $pedido->getPrato()->getValor();
            }
            echo "\nForam feitos ".count($pedidos)." pedidos no valor total de {$somaValor}\n";
        break;
        case 0:
            echo "\nSaindo...\n";
        break;
        default:
            echo "\nResposta Inválida digite novamente...\n";
        break;
    }
} while ($resposta != 0);


?>