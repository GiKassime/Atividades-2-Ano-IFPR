<?php 
require_once 'models/Carro.php';
require_once 'models/Fabricante.php';

$fabricantes = array(new Fabricante("Volkswagem", "VW"), new Fabricante("Chevrolet", "GM"),new Fabricante("Fiat", "F"),new Fabricante("Renault","RN"));
$carros = array();

while(true){
    do {
        echo"\n****Menu****\n1- Cadastrar Carro\n2-Excluir Carro\n3-Listar Carros\n0-SAIR\n";
        $op = readline("Escolha uma opção: ");
        switch ($op) {
            case '1':
                echo "\nCADASTRANDO CARRO\n";
                $modelo = readline("Digite o modelo do carro: ");
                $ano = readline("Digite o ano de fabricação do carro: ");
                $fab = null;
                $laco = true;
                do {
                    foreach ($fabricantes as $key => $fabricante) {
                        echo "\n". $fabricante;
                    }
                    echo "\n";
                    $fab = readline("Digite a sigla do fabricante: ");
                    foreach ($fabricantes as $key => $fabricante) {
                            if($fabricante->getSigla() == $fab){
                                $fab = $fabricante;
                                $laco = false;
                            }
                    }
                    if(!$laco){
                        echo "Fabricante não encontrado, tente novamente!";
                    }
                } while ($laco);
                array_push($carros,new Carro($modelo,$ano,$fab));
                print_r($carros);
                echo "\nCARRO CADASTRADO!";
                break;
            case '2':
                echo "\nEXCLUINDO CARRO";
                foreach ($carros as $key => $carro) {
                    echo "\n". ($key+1)." - ". $carro;
                }
                $carro = readline("Digite o índice do carro a ser excluido: ");
                unset($carros[$carro-1]);
                echo "Carro excluido";
                break;
            case '3':
                echo "\nLISTANDO CARROS";
                foreach ($carros as $key => $carro) {
                    echo "\n". ($key+1)." - ". $carro;
                }
                break;
            default:
                echo "Valor inválido";
                break;
        }
    } while ($op != 0);
}
?>

