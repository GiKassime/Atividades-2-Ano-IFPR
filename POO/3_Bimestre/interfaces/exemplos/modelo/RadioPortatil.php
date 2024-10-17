<?php 
require_once("IRadio.php");
class RadioPortatil implements IRadio{
    //atributos
    private $cor;
    private $marca;
    // Métodos
    public function ligarRadio()
    {
        echo"RADIO PORTATIL LIGADO";  
    }
    public function desligarRadio()
    {
        echo"RADIO PORTATIL DESLIGADO";  

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
     * Get the value of marca
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set the value of marca
     */
    public function setMarca($marca): self
    {
        $this->marca = $marca;

        return $this;
    }
}
?>