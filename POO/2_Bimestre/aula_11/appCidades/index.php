<?php 
require_once 'modelo/Cidade.php';
require_once 'modelo/Estado.php';

$cidades = array("Florianópolis","Blumenau","Foz do Iguaçu","Cascavel");
$siglas = array("SC","PR");
$nomesEstados = array("Santa Catarina","Paraná");
$estados = array();
$listaCidades= array();
for ($i=0; $i < count($nomesEstados); $i++) { 
    $estado = new Estado();
    $estado->setNome($nomesEstados[$i]);
    $estado->setSigla($siglas[$i]);
    array_push($estados, $estado);
    
}
for ($i=0; $i < count($cidades); $i++) { 
    $cidade = new Cidade();
    $cidade->setNome($cidades[$i]);
    $cidade->setQtdHabitantes(rand(0,200));
    $cidade->setAltitude(rand(0,200));
    if($i <= 1){
        $cidade->setEstado($estados[0]);
    }else{
        $cidade->setEstado($estados[1]);
    }
    array_push($listaCidades,$cidade);
    
}

foreach ($listaCidades as $cidade) {
    echo $cidade;
}


?>