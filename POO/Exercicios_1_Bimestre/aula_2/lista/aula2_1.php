<?php
 $num = readline("Digite um número");
 if(is_numeric($num)){  
 if ($num >= 0) {
    $dobro = $num*2;
    echo"\nO dobro de $num é igual a $dobro";
 }else if($num < 0){
    $triplo = $num*3;
    echo"\nO triplo de $num é igual a $triplo";
 }
}else{  
    echo "\nNão foi digitado um número";
}