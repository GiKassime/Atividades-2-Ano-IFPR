<?php 
require_once 'Calculadora.php';

class Multiplicacao extends Calculadora{

    public function calcular() {
        return "\n".$this->numA."X".$this->numB."=".($this->numA*$this->numB)."\n";
    }
}
?>