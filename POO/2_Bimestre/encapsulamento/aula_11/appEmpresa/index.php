<?php 
require_once 'modelos/Funcionario.php';
require_once 'modelos/Departamento.php';

$funcionarios = array();
$departamentos = array();

while (true) {
  do {
    echo"\n****Menu****\n1- Cadastrar Departamento\n2-Cadastrar Funcionarios\n3-Listar todos funcionarios\n4-Listar funcionarios por departamento\n0-SAIR\n";
    $op = readline("Escolha uma opção: ");
           switch ($op) {
               case '1':
                    echo "\n\nCadastro Departamento\n\n";
                    $nome = readline("Digite o nome do departamento: ");
                    $numeroSala = readline("Digite o número da sala: ");
                    array_push($departamentos, new Departamento($nome,$numeroSala));
                    echo "\Departamento Cadastrada com sucesso!\n";
                    break;
                case '2':
                    echo "\n\nCadastro Funcionario\n\n";
                    echo "CADASTRO FUNCIONÁRIO";
                    $nome = readline("Digite o nome do Funcionário:");
                    $cargo = readline("Digite o cargo do Funcionário:");
                    $salario = readline("Digite o salario do Funcionário:");
                    $depto =  -1;
                        while ($depto > count($departamentos) || $depto <= 0 ) {
                            foreach ($departamentos as $key => $departamento) {
                                echo "\n". ($key+1)." - ". $departamento;
                            }
                            $depto = readline("Digite o número do departamento que o funcionário pertence: ");
                        }
                    $funcionarios[] = new Funcionario($nome, $cargo, $salario,$departamentos[$depto-1]);
                    echo "\Departamento Cadastrada com sucesso!\n";
                    break;
                    case '3':
                    if (!count($funcionarios)) {
                    echo "\nLista vazia\n";
                    }else{
                        echo "\nLista\n";
                        foreach ($funcionarios as $i => $funcionario) {
                        echo "\n".($i+1)."-". $funcionario;
                        }
                    }
                    break;
                    case '4':
                        $depto = 0;
                        while ($depto > count($departamentos) || $depto <= 0 ) {
                            foreach ($departamentos as $key => $departamento) {
                                echo "\n". ($key+1)." - ". $departamento."\n";
                            }
                            $depto = readline("Digite o número do Departamento:");
                        }
                        $depto = $departamentos[$depto-1];
                        foreach ($funcionarios as $key => $funcionario) {
                            if($depto->getNome() == $funcionario->getDepartamento()->getNome()){
                                echo "\n".($key+1)."-".$funcionario;
                            }
                        }
                    break;
                    case '0':
                        echo "\nSaindo......";
                        die();
                    break;
                    default:
                   echo "\nValor inválido\n";
                   break;
           }
    } while ($op != 0);
}

?>