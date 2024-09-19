<?php 
require_once 'modelo/Turma.php';
require_once 'modelo/Aluno.php';

$turma  = new Turma("TDS", "Técnico integrado analise e densenvolvimento de sistemas");
$alunos = array();
for ($i=0 ; $i < 5 ; $i++) { 
    $nome = readline("Digite o nome do aluno: ");
    $idade = readline("Digite a idade do ". $nome." :");
    $aluno = new Aluno($nome,$idade,$turma);
    array_push($alunos,$aluno);
}

$turma->setAlunos($alunos);

foreach ($turma->getAlunos() as $key => $aluno) {
    echo "\n".($key+1). " - ".$aluno;
}


?>