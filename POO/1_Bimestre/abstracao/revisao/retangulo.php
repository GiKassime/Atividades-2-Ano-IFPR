<?php
function calculaArea($vetor){
    $area = $vetor["base"]*$vetor["altura"];
    return $area;
}
$retangulos = array();
for ($i=0; $i < 5; $i++) { 
    
    $base = readline("\nInforme a base: ");
    $altura = readline("\nInforme a altura: ");
    $ret = array("base" => $base, "altura" => $altura);
    array_push($retangulos,$ret);
}
foreach ($retangulos as $r) {
    $area = calculaArea($r);
    printf("O retangulo %dcmX%dcm tem área de %dcm²\n",$r["base"], $r["altura"],$area);
}