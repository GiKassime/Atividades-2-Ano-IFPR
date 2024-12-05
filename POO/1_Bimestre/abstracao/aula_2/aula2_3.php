<?php
for($i = 0 ; $i < 5 ; $i++){

        $nome = readline("\nDigite seu nome(string): ");
        $altura = readline("\nDigite sua altura(numero): ");
        $peso = readline("\nDigite seu peso(número): ");
        if(is_numeric($peso) && is_numeric($altura)){
            $imc = $peso / pow($altura,2);
            printf("$nome tem peso $peso kg, altura $altura m e IMC %.2f\n",$imc);
        }else{
            echo "\n Dados digitados não estão no formato aceito\n";
            $i --;
        }
    }