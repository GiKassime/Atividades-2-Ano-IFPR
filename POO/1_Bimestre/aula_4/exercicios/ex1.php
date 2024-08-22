<?php

$vetor = array();
$i = 0 ;
$soma = 0 ;

 while($i < 10){
    $num = readline("\nDigite um número: ");
     if(is_numeric($num)) {
        $i++;
        array_push($vetor,$num);
    }else{
        print("Somente números!!!\n");
    }
 }
 foreach ($vetor as $value) {
    $soma += $value;
 }
 print("\nA soma dos elementos do array é $soma");
 //$soma  = array_sum($vetor);
 $media = $soma / count($vetor);
 print("\nA média do array é $media\n");

