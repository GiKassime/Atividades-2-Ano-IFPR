<?php 
require_once 'Calculadora.php';

class Divisao extends Calculadora{

    public function calcular() {
        return "\n".$this->numA."/".$this->numB."=".($this->numA/$this->numB)."\n";
    }
}
?>