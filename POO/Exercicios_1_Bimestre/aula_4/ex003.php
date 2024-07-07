<?php
function mostra_array($array){
    foreach ($array as $value) {
        echo $value." | ";
    }
 }
 function mostra_chave($array){
    foreach ($array as $key=> $value) {
        echo $key." | ";
    }
 }
$dados =array("Pessoa1" => array("Nome"=> "Pedro", "Endereço" => "Rua a", "Cidade"=> "Foz","UF"=>"PR"),
             "Pessoa2" => array("Nome"=> "Pedro", "Endereço" => "Rua a", "Cidade"=> "Foz","UF"=>"PR"),
             "Pessoa3" => array("Nome"=> "Pedro", "Endereço" => "Rua a", "Cidade"=> "Foz","UF"=>"PR"));    


 mostra_chave($dados["Pessoa1"]);         
 echo "\n" ;
foreach ($dados as $pessoa) {
    mostra_array($pessoa); 
    echo "\n" ;
}             
/*
mostra_array($dados["Pessoa2"]); 
echo "\n" ;
mostra_array($dados["Pessoa3"]); */





?>