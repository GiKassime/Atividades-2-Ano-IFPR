<?php 
require_once ("models/Retangulo.php");
require_once ("models/Circulo.php");
require_once ("models/Quadrado.php");

$quadrado = new Quadrado();
$quadrado->setLado(2);
echo "\nA area é igual a ". $quadrado->getArea()."\n";
echo $quadrado->getDesenho();
?>