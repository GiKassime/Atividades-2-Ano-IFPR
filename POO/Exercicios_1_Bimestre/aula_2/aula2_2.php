<?php

$numero = readline("Digite um número: ");
for($i= $numero -1; $i > 0; $i--){
    if($i == 1){
        echo $i;
    }else{
    echo $i.", ";

    }
}
echo "\n";