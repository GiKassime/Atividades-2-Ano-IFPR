<?php 
require_once 'models/Restaurante.php';
require_once 'models/Hotel.php';
require_once 'models/PontoTuristico.php';

$listaEspacos = array();
do {
    //MENU
    echo"\n----------MENU DE ESPAÇOS----------\n1-CADASTRAR ESPAÇO\n2-EXCLUIR ESPAÇO\n3-LISTAR ESPAÇOS\n0-SAIR\n";
    $resposta = readline("Digite sua resposta: ");
    //OPCOES
    switch ($resposta) {
        case 1:
            //CADASTRAR ESPAÇO
            do {
                echo "\n______CADASTRAR ESPAÇO______\n";
                echo"\n----------ESPAÇOS----------\n1-HOTEL\n2-RESTAURANTE\n3-PONTO TURÍSTICO\n";
                $tipo = readline("Qual o espaço que deseja cadastrar? :  ");
                switch ($tipo) {
                    case 1:
                        $espaco = new Hotel();
                        do {
                            $estrela  = readline("Qual a quantidade de estrelas do hotel (1-5)");
                        } while ($estrela < 1 || $estrela > 5); 
                        do {
                            $cafe = readline("Tem café incluso? (0-False  ou 1-Sim) : ");
                        } while ($cafe < 0 or $cafe > 1);
                        $espaco->setCafeIncluso($cafe);
                        $espaco->setNumeroEstrelas($estrela);
                        break;
                    case 2:
                        $espaco = new Restaurante();
                        $espaco->setTipoComida(readline("Qual o tipo de comida do restaurante? : "));
                    break;
                    case 3:
                        $espaco = new PontoTuristico();
                        do {
                            $tempoDur = readline("Qual o o tempo de duração da visita?(só aceito em horas inteiras!) : ");
                        } while (!is_int($tempoDur));
                        $espaco->setDuracaoDaVisita($tempoDur);
                    break;
                    default:
                        echo "Espaço inválido!";
                        break;
                }
            } while ($tipo < 1 && $tipo > 3);
            
            $espaco->SetNome(readline("Qual o nome do espaço? : "));
            $espaco->SetEndereco(readline("Qual o endereço do espaço? : "));
            echo "\nESPAÇO CADASTRADO COM SUCESSO\n";
            array_push($listaEspacos,$espaco);
            break;
        case 2:
            //EXCLUIR ESPAÇO
            echo "\n______EXCLUIR ESPAÇO______\n";
            foreach ($listaEspacos as $key => $espaco) {
                echo "\n".($key+1)." - ".$espaco->getDadosEspaco();
            }
        break;
        case 3:
            //LISTAR ESPAÇOS
            echo "\n______LISTA DE ESPAÇOS______\n";
            $fatura = new Industrial();
            echo "\n. . . .Calcular valor da fatura Industrial. . . .\n";
        break;
        case 0:
            //SAIR
            echo "\nSaindo...\n";
            exit;
        break;
        default:
            echo "\nResposta Inválida digite novamente...\n";
        break;
    }
} while ($resposta != 0);
?>