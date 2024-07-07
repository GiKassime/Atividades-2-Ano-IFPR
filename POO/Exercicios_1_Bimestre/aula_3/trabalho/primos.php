<?php

function numeroPrimo(int $num) : bool{
    $divisor = 0;
    for ($i=1; $i <= $num; $i++) { 
        if($num%$i==0){
            $divisor++;
        }
    }
    return($divisor == 2);      
    

    
}
function menu(){
    echo "*********PRIMO OU NÃO?**********\n";//menu
}
menu();
do{
    do {
        $resposta = readline("\nDigite um número:");
    } while (is_numeric($resposta) == false);//Caso o usuário não digite um número ou nada
  
   
        
  
    if(numeroPrimo($resposta))
        echo "$resposta é um número primo\n";
    else
        echo "$resposta não é um número primo\n";

    
}while($resposta > 1);
