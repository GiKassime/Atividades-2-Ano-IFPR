<?php 
require_once 'models/CD.php';
require_once 'models/DVD.php';
require_once 'models/Midia.php';
$midias = array();
do {
    echo "\nMENU\n1-Cadastrar Midia\n2-Listar Midias\n0-Sair\n";
    $resposta =  readline("DIGITE SUA ESCOLHA: ");
    switch ($resposta) {
        case 1:
            $nome = readline("Nome da midia: ");
            $valor = readline("Valor da midia: ");
            echo"\n----------TIPOS----------\n1-MIDIA QUALQUER\n2-DVD\n3-CD\n";
                $tipo = readline("Qual o tipo da midia que deseja cadastrar? :  ");
            if ($tipo == 1) {
                $midia = new Midia($nome,$valor);
            }elseif($tipo == 2){
                $midia = new DVD($nome,$valor);
            }elseif($midia == 3){
                $midia = new CD($nome,$valor);
            }
            array_push($midias,$midia);
            echo"\nMIDIA CADASTRADA COM SUCESSO\n";
            break;
        case 2:
            if (!is_null($midias)) {
                echo "\nNenhuma midia cadastrada\n";
            }else{
                echo "\nLISTA DE MIDIAS\n";
                 foreach ($midias as $key=>$midia) {
                    echo ($key+1)."-".$midia->getDados().$midia->getTipo()."\n";
                }
            }
        break;
        default:
            echo "\nValor inválido\n";
        break;
    }
} while ($resposta != 0);

?>