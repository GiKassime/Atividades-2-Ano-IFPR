<?php
function lerElementos($vetor, int $quantidade){
    $i = 0;
    while($i < $quantidade){
        $num = readline("\nDigite um número: ");
        if(is_numeric($i)) {
            $i++;
            array_push($vetor,$num);
        }else{
            print("Somente números!!!\n");
        }
    }
    return $vetor;
}
function lerquantidade(){
    if(is_numeric($quantidade)) {
        $i++;
    
    }else{
        print("Somente números!!!\n");
    }
    $quantidade = readline("Digite a quantidade de elementos que quer em cada array: ");
}
$quantidade = readline("Digite a quantidade de elementos que quer em cada array: ");
$vetorA = lerElementos(array(), $quantidade);
print_r($vetorA);
$vetorB = array();


