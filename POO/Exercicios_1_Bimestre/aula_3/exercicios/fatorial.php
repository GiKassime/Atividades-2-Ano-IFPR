<?php

function Fatorial(int $num1 =1){
    $fatorial  = $num1;
    for($i = $num1 -1; $i > 1; $i--){
        $fatorial *= $i;
    }
   return $fatorial;    
}

do{
    $num= readline("\nDigite um número: ");
    if($num == 0){
        echo "\nObrigado por utilizar!\n";
        break;
    }
    echo "O fatorial de $num é igual a ". Fatorial($num). "\n";   
}while($num != 0);
