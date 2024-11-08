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
                        //daqui pra baixo só confiro se os valores que vou colocar na minha instancia vão ser o apropiados
                        do {
                            $estrela  = readline("Qual a quantidade de estrelas do hotel (1-5)");
                        } while ($estrela < 1 || $estrela > 5); 
                        do {
                            $cafe = readline("Tem café incluso? (0-False  ou 1-Sim) : ");
                        } while ($cafe < 0 or $cafe > 1);
                        //setto meus valores
                        $espaco->setCafeIncluso($cafe);
                        $espaco->setNumeroEstrelas($estrela);
                        break;
                    case 2:
                        $espaco = new Restaurante();
                        //seto  meus valores direto pois é string né, string é pai
                        $espaco->setTipoComida(readline("Qual o tipo de comida do restaurante? : "));
                    break;
                    case 3:
                        $espaco = new PontoTuristico();
                        //aqui to fazendo a msm parada de pegar os dados em variaveis antes de por dentro do objeto
                        do {
                            $tempoDur = readline("Qual o o tempo de duração da visita?(só aceito em horas inteiras!) : ");
                        } while (is_int($tempoDur));
                        $espaco->setDuracaoDaVisita($tempoDur);
                    break;
                    default:
                        echo "Espaço inválido!";
                        $tipo = false;
                        break;
                    }
            } while (!$tipo);
            //aqui serve para quando terminar o cadastro do objeto, settando os atributos da classe filha, depois seto o nome e endereço para oq todos tem em comum, poderia ter feito no começo mas já ta ai né.
            $espaco->SetNome(readline("Qual o nome do espaço? : "));
            $espaco->SetEndereco(readline("Qual o endereço do espaço? : "));
            echo "\nESPAÇO CADASTRADO COM SUCESSO\n";
            array_push($listaEspacos,$espaco);
            break;
        case 2:
            if (!empty($listaEspacos)) {
                //EXCLUIR ESPAÇO
                //to com o get dados espaco q retorna uma string com o nome e endereço, somente os atributos da classe pai para não dar BO e ser prático
                echo "\n______EXCLUIR ESPAÇO______\n";
                foreach ($listaEspacos as $key => $espaco) {
                    echo "\n".($key+1)." - ".$espaco->getDadosEspaco()."\n";
                }
                do {
                    $espacoExcluido   = readline("Qual o espaço que deseja excluir? : ");
                } while ($espacoExcluido <= 0 || $espacoExcluido > count($listaEspacos));
                //Estou pedindo de 1 para cima mas na hora d eu diminuo um ok
                $espacoExcluido -- ;
                echo  "\nEXCLUINDO ".$listaEspacos[$espacoExcluido]->getNome()."........\n";
                array_splice($listaEspacos, ($espacoExcluido));
                echo "\nESPAÇO EXCLUÍDO COM SUCESSO\n";
            }else{
                echo "\nNÃO HÁ ESPAÇOS CADASTRADOS!\n";
            }
            
        break;
        case 3:
            //LISTAR ESPAÇOS
            echo "\n______LISTA DE ESPAÇOS______\n";
            foreach ($listaEspacos as $key => $espaco) {
                $dados = "\n".($key+1)." - ". $espaco->getDadosEspaco();
                if ($espaco instanceof Restaurante) {
                    $dados .= $espaco->getDadosRestaurante();
                } elseif ($espaco instanceof PontoTuristico) {
                    $dados .= $espaco->getDadosPontoTuristico();
                }elseif($espaco instanceof Hotel){
                    $dados .= $espaco->getDadosHotel();
                }
                echo $dados;
            }
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