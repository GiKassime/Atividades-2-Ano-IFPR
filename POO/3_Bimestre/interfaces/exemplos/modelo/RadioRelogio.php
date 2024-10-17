<?php 
require_once("IRadio.php");
require_once("IRelogio.php");
class RadioRelogio implements IRadio,IRelogio  {
    //atributos
    private $corTela;
    private $marca;
    // Métodos
    public function ligarRadio(){
        echo"RADIO RELOGIO LIGADO";  
    }
    public function desligarRadio(){
        echo"RADIO RELOGIO DESLIGADO";  

    }
    public function mostrarHora()
    {
        echo "HORAAAA ";
    }
    /**
     * Get the value of cor
     */
    public function getCorTela()
    {
        return $this->corTela;
    }

    /**
     * Set the value of cor
     */
    public function setCorTela($cor): self
    {
        $this->corTela = $cor;

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
