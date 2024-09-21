<?php 
require_once 'modelos/Atleta.php';
require_once 'modelos/Pais.php';


$paises  = array(new Pais("Brasil","América do Sul"));
$atletas = array(new Atleta("João","17","Volei",$paises[0]), new Atleta("Joana","19","Futebol",$paises[0]) );

foreach ($atletas as $atleta) {
    echo "\n".$atleta;
}
?>