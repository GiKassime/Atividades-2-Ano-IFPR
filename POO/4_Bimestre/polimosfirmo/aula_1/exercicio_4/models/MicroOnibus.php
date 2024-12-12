<?php 
require_once 'Veiculo.php';

class MicroOnibus extends Veiculo{

    public function calcularTotal()
    {
        return $this->valorAluguel +($this->qtdKmRodados* 2.75);
    }
    public function getTipo(){
        return "Micro-Onibus";
    }

}
?>