<?php
 function mostra_array($array){
    foreach ($array as  $value) {
        echo $value." | ";
    }
 }

 mostra_array( $nomes= ["Maria","Predro","Maria","Predro","Maria"]);
 echo "\n";
 mostra_array( $sobrenome= [1,2,3,4,5,6]);
 echo "\n";
 mostra_array($sexo= [1,2,3,4,5,6]);
 echo "\n";
 mostra_array($nascimento= [1,2,3,4,5,6]);
 echo "\n";

?>