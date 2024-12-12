<?php 
require_once 'Veiculo.php';

class Carro extends Veiculo{

    public function calcularTotal()
    {
        return $this->valorAluguel +($this->qtdKmRodados* 1.50);
    }
    public function getTipo(){
        return "Carro";
    }

}
?>