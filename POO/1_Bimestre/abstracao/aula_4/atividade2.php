<?php

function lerElementos($vetor, int $quantidade){
    $i = 0;
    while($i < $quantidade){
        $num = readline("\nDigite um número: ");
        if(is_numeric($num)) {
            $i++;
            array_push($vetor,$num);
        }else{
            print("Somente números!!!\n");
        }
    }
    return $vetor;
}
function calculaFahrenheit($vetor){
    $vetor1 = array();
    foreach ($vetor as $valor) {
        $calculo = ($valor*1.8)+32;
        array_push($vetor1,$calculo);
    }
    return $vetor1;
}
function calculaFatorial($vetor){
    $vetor1 = array();
    foreach ($vetor as $valor) {
        $fatorial  = $valor;
            if($valor >= 1){
                for($i = $valor -1; $i > 1; $i--){
                    $fatorial *= $i;
                }
            }else {
                $fatorial = 0;
            }
            array_push($vetor1,$fatorial);
    }
   return $vetor1;
}
function calculaFuncao($vetor){
    $vetor1 = array();
    foreach ($vetor as $valor) {
        if($valor != 0){
            $valor = ($valor*$valor+2*$valor)/ (2*$valor);
        }
        array_push($vetor1,$valor);
        
    }
    return $vetor1;
}
function mostraArray($vetor,$detalhe = ""){
    $i = 0;
    foreach ($vetor as $value) {
        $i++;
        if(count($vetor) > $i){
            print(number_format($value, 1, ',').$detalhe.", ");
        }else{
            print(number_format($value, 1, ',').$detalhe.".");
        }
       
    }
}
$vetor1 = lerElementos($vetor = array(), 5);

print("\n\nFahrenheit de cada valor lido para o vetor inicial em Celsius\n");
$vetor2 = calculaFahrenheit($vetor1);
mostraArray($vetor2,"°");
print("\n\nRecebe o fatorial do número lido caso ele seja maior ou igual a 1, ou 0 caso contrário.\n");
$vetor3 = calculaFatorial($vetor1);
mostraArray($vetor3);
print("\n\nRecebe o resultado da função: f(X) = (X² + 2X + 4) / 2X, onde X é um dos
números lidos inicialmente.\n");
$vetor4 = calculaFuncao($vetor1);
mostraArray($vetor4);
print("\n");

