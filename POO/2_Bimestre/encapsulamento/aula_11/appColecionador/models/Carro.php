<?php 
require_once 'Fabricante.php';

class Carro{
    private $modelo;
    private $anoFabricacao;
    private Fabricante $fabricante;
    
    public function __construct($modelo,$anoFabricacao,$fabricante) {
        $this->modelo = $modelo;
        $this->anoFabricacao = $anoFabricacao;
        $this->fabricante = $fabricante;
    }
    public function __toString()
    {
        return "Modelo: {$this->modelo}, Ano de Fabricação: {$this->anoFabricacao}, {$this->fabricante}";
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
     * Get the value of anoFabricacao
     */
    public function getAnoFabricacao()
    {
        return $this->anoFabricacao;
    }

    /**
     * Set the value of anoFabricacao
     */
    public function setAnoFabricacao($anoFabricacao): self
    {
        $this->anoFabricacao = $anoFabricacao;

        return $this;
    }

    /**
     * Get the value of fabricante
     */
    public function getFabricante(): Fabricante
    {
        return $this->fabricante;
    }

    /**
     * Set the value of fabricante
     */
    public function setFabricante(Fabricante $fabricante): self
    {
        $this->fabricante = $fabricante;

        return $this;
    }
}

?>


