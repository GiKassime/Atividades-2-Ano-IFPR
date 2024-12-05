<?php 
// EXERCICIO 1
for($i = 0 ; $i < 10; $i++){
    $numero =  readline("\nInforme um número inteiro: ");
    if(is_int($numero)){
        if($numero < 0){
            echo $numero." é negativo";
        }else if($numero > 0){
            echo $numero." é positivo";
        }else if($numero == 0){
            echo $numero." é igual a zero";
        }
        echo "\n";
    }else{
        echo "\n". $numero." não é um número inteiro \n";
        $i --;
    }

}