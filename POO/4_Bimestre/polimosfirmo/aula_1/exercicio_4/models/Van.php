<?php 
require_once 'Veiculo.php';

class Van extends Veiculo{

    public function calcularTotal()
    {
        return $this->valorAluguel +($this->qtdKmRodados* 2.10);
    }
    public function getTipo(){
        return "Van";
    }

}
?>