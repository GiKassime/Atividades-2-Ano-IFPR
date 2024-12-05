<?php 
require_once 'Produto.php';

class Computador extends Produto{
    private $processador;
    private $memoria;
    public function __construct($descricao,$unidadeMedida,$memoria,$processador) {
        $this->setDescricao($descricao);
        $this->setUnidadeMedida($unidadeMedida);
        $this->memoria = $memoria; 
        $this->processador = $processador;   
    }
    public function getDados(){
        return "\nComputador ".$this->getDescricao()." | quantidade :".$this->getUnidadeMedida()." | Processador : ".$this->processador." | Memória : ".$this->memoria;
    }
}
?>