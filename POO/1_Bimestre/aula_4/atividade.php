<?php
function numeroPrimo(int $num){
    $raiz = sqrt($num);
    for ($i=2; $i < $raiz; $i++) { 
        if($num%$i==0){
            return false;
        }
        return true;
    }
   
}
$vetor = array();
$num = 1;
while($num!= 0){
    $num = readline("\nDigite um número: ");
    if(numeroPrimo($num)){
        print("\n$num é primo!\n");
        array_push($vetor,$num);
    }else{
        print("\n$num não é primo!\n");
    }
}
print("\nEsses são todos os números primos:\n");
foreach ($vetor as $value) {
    print("---------> $value <---------\n");
}
