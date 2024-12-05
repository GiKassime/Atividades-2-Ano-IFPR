<?php 
require_once 'Produto.php';

class Balde extends Produto{
    private $capacidade;
    public function __construct($descricao,$unidadeMedida,$capacidade) {
        $this->setDescricao($descricao);
        $this->setUnidadeMedida($unidadeMedida);
        $this->capacidade = $capacidade; 
    }
    public function getDados(){
        return  "\nComputador ".$this->getDescricao()." | quantidade :".$this->getUnidadeMedida()." | Capacidade: ".$this->capacidade." litros";
    }
}
?>