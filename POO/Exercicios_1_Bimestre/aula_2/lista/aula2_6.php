<?php

$numero1 = readline("\nDigite um número inteiro: ");
$numero2 =  readline("\nDigite outro número inteiro: ");
$multiplicador = 0;

if(is_numeric($numero1) && is_numeric($numero2)){
    
    for($i= 0 ;$i < $numero1 ;$i++){
        $multiplicador += $numero2;
       
    }
    echo "\n $numero1 X $numero2 = $multiplicador";
}else{
    echo "\nValores digitados não são inteiros";
}

