<?php 

class Midia {
    protected string $descricao;
    protected float $precoPago;
    public function __construct($descricao,$precoPago) {
        $this->descricao = $descricao;
        $this->precoPago = $precoPago;
    }
    public function getDados(){
        return "A Midia ".$this->descricao." custa R$".$this->precoPago;
    }
    public function getTipo(){
        return " Tipo: Midia";
    }
}
?>