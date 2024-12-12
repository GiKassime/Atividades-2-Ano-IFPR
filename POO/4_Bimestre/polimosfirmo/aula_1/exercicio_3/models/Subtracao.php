<?php 
require_once 'Calculadora.php';

class Subtracao extends Calculadora{
    
    public function calcular() {
        return "\n".$this->numA."-".$this->numB."=".($this->numA-$this->numB)."\n";

    }
}
?>