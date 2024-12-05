<?php 

class Produto {
    private $descricao;
    private $unidadeMedida;
    
    public function __construct($descricao,$unidadeMedida) {
        $this->descricao = $descricao;
        $this->unidadeMedida = $unidadeMedida;
    }
    public function getDados(){
        return "\nProduto ".$this->descricao." | quantidade :".$this->unidadeMedida;
    }

    /**
     * Get the value of descricao
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set the value of descricao
     */
    public function setDescricao($descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get the value of unidadeMedida
     */
    public function getUnidadeMedida()
    {
        return $this->unidadeMedida;
    }

    /**
     * Set the value of unidadeMedida
     */
    public function setUnidadeMedida($unidadeMedida): self
    {
        $this->unidadeMedida = $unidadeMedida;

        return $this;
    }
}
?>