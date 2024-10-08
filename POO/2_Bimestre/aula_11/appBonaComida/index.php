<?php 
require_once 'models/Prato.php';
require_once 'models/Pedido.php';
//FUNÇÃO PARA LISTAR ITENS DENTRO DE UM ARRAY
function listar($array,$texto){
    if (count($array) > 0) {
        foreach ($array as $key => $valor) {
                echo "\n". $key+1 . $valor;
        }
    }else {
        echo "\nNão há ".$texto ." cadastrado\n";
    }
}


//FUNÇÃO PARA BUSCAR O PEDIDO DO ARRAY PEDIDO
function buscaPedido($array,$resposta){
        foreach ($array as  $key =>$valor){
                if ($key + 1 == $resposta) {
                    return $resposta;
            } 
        }
        return null;
} 
//FUNÇÃO PARA BUSCAR O PRATO DO ARRAY COM OBJETOS PRATOS
function buscaPrato($array,$resposta){
        foreach ($array as $valor){
                if ($valor->getNumero()== $resposta) {
                    return $valor;
            } 
        }
        return null;
} 
//ARRAY DE PRATOS E PEDIDOS
$pratos = array(
    new Prato(1,"Camarão a Milanesa", 110),
    new Prato(2,"Pizza Margherita", 80), 
    new Prato(3,"Macarrão a Carbonara", 60), 
    new Prato(4,"Bife a Parmegiana", 75),
    new Prato(5,"Risoto ao Funghi",70)
);
$pedidos = array();
do {
    //MENU
    echo"\n----------MENU----------\n1- Cadastrar Pedido\n2-Cancelar Pedido\n3-Listar Pedidos\n4-Total de vendas\n0-SAIR\n";
    $resposta = readline("Digite sua resposta: ");
    //OPCOES
    switch ($resposta) {
        case 1:
            //Cadastrar
            echo "\n---------------PRATOS--------------\n";
            echo "NÚMERO         NOME           VALOR";
            listar($pratos,"pratos");
            echo "\n\n";
            $nomeCliente = readline("Informe o nome do cliente: ");
            $nomeGarcom = readline("Informe o nome do garçom: ");
            $prato = null;
            while($prato == null){
                $prato = buscaPrato($pratos,readline("Informe o número do prato: "));
            }
            array_push($pedidos, new Pedido($nomeCliente,$nomeGarcom, $prato));
            echo "\n----------PEDIDO CADASTRADO----------\n";
            break;
        case 2:
            //Cancelar
            echo "\n---------------PEDIDOS FEITOS--------------\n";
            listar($pedidos,"pedidos");
            echo "\n";
            $pedido = null;
            while($pedido == null){
                $pedido = buscaPedido($pedidos,readline("Qual o índice do pedido a ser excluido? : "));
            }
            array_splice($pedidos,$pedido - 1,1);
            echo "\n----------PEDIDO EXCLUIDO----------\n";

        break;
        case 3:
            //Listar
            echo "\n---------------PEDIDOS FEITOS--------------\n";
            listar($pedidos,"pedidos");
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