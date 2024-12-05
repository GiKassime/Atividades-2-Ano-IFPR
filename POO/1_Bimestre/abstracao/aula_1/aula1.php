<?php 

    for($i = 1980;$i<=2024;$i++){
        if($i%4==0 && $i%100!=0){
            echo $i." é um ano Bissexto\n";
        }else if($i%4==0 && $i%400!=0){
            echo $i." é um ano Bissexto\n";
        }
        // Poderia ser feito desta maneira também if(($i%4==0 && $i%100!=0)||($i%4==0 && $i%400!=0)){}
        // Poderia ser feito desta maneira também if($i%4==0 && ($i%100!=0 || $i%400!=0)){}

    }