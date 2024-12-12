<?php 
require_once 'Veiculo.php';

class Onibus extends Veiculo{

    public function calcularTotal()
    {
        return $this->valorAluguel +($this->qtdKmRodados* 4.20);
    }
    public function getTipo(){
        return "Onibus";
    }
}
?>