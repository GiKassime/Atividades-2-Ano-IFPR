<?php

function areaCirculo($raio){
    $pi = 3.14;
    $area = $pi *(pow($raio,2));
    return $area;   
}
function cincunferenciaCirculo($raio){
    $pi = 3.14;
    $cincunferencia = 2 * $pi * $raio;  
    return $cincunferencia;

}
for ($i=1; $i <=3 ; $i++) { 
    $raio = readline("\nDigite o raio do círculo $i em centimetros: ");
    echo "\nCÍRCULO $i \nSua cincunferencia é de ".cincunferenciaCirculo($raio)."cm\nSua area é de ". areaCirculo($raio)."cm\n";
}
