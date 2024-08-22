<?php 
$turmas = array();
function somaAlunos($array){
    $soma = 0;
    foreach ($array as $key => $value) {
        $soma += $value["quantidade_de_alunos"];
    }
    echo "\nO total de alunos de todas as turmas é igual a " . $soma ."\n";
}
function leTurmas(){
    $tot_turmas = readline("\n\nQual a quantidade de turmas que deseja registrar?: ");
    for ($i=0; $i < $tot_turmas; $i++) { 
    $curso = readline("\nDigite o curso da TURMA ". ($i+1).": ");
    $ano = readline("\nDigite o ano da TURMA ". ($i+1).": ");
    $qntAlunos = readline("\nDigite a quantidade de alunos da TURMA ". ($i+1).": ");
    $array_turma = array("curso" => $curso, "ano" => $ano, "quantidade_de_alunos" => $qntAlunos);
    //array_push($turmas, $array_turma); só funciona com indexados
    $turmas["TURMA".$i+1] = $array_turma;
    }
    return $turmas;
}
somaAlunos(leTurmas());

?>