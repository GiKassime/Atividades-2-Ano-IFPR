<?php 
require_once 'IVeiculo.php';
class Veiculo {
    protected $modelo;
    protected $cor;
    protected $velocidadeMax;
    
    public function __construct($modelo,$velocidadeMax,$cor){
        $this->modelo = $modelo;
        $this->velocidadeMax = $velocidadeMax;
        $this->cor = $cor;
    }
    /**
     * Get the value of modelo
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * Set the value of modelo
     */
    public function setModelo($modelo): self
    {
        $this->modelo = $modelo;

        return $this;
    }

    /**
     * Get the value of cor
     */
    public function getCor()
    {
        return $this->cor;
    }

    /**
     * Set the value of cor
     */
    public function setCor($cor): self
    {
        $this->cor = $cor;

        return $this;
    }

    /**
     * Get the value of velocidadeMax
     */
    public function getVelocidadeMax()
    {
        return $this->velocidadeMax;
    }

    /**
     * Set the value of velocidadeMax
     */
    public function setVelocidadeMax($velocidadeMax): self
    {
        $this->velocidadeMax = $velocidadeMax;

        return $this;
    }
}
?>