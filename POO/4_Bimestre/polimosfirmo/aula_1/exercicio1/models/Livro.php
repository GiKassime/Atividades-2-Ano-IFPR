<?php 
require_once 'Produto.php';

class Livro extends Produto{
    private $autor;
    public function __construct($descricao,$unidadeMedida,$autor) {
        $this->setDescricao($descricao);
        $this->setUnidadeMedida($unidadeMedida);
        $this->autor = $autor; 
    }
    public function getDados(){
        return  "\nLivro ".$this->getDescricao()." | quantidade :".$this->getUnidadeMedida()." | Autor: ".$this->autor;
    }
}
?>