<?php

class Liquidificador{
    //Atributos
    private $cor ;
    private $marca; 
    private $voltagem; 
    private $capacidade;
    private $ligado;
    //Métodos
    public function __construct($ligado = false) {
        $this->ligado = $ligado;
    }
    public function ligarLiquidificador(){
            $this->setLigado(true);
            $this->estadoLiquidificador();
    }
    public function desligarLiquidificador(){
            $this->setLigado(false);
            $this->estadoLiquidificador();
    }

    public function estadoLiquidificador(){
       if ($this->getLigado()== true) {
            $estado = "ligado";
            
        }else{
            $estado = "desligado";
        }
        $this->estadoMotor($this->getLigado());
        echo "\nLiquidificador ". $estado;
    }
    private function estadoMotor(){
        if ($this->getLigado()) {
            $motor = "girando";
        }else{
            $motor = "parado";
        }
        echo "\nMotor ". $motor;
    }
    //GET AND SETTERS
    
    private function setLigado($ligado){
        $this->ligado = $ligado;
    }
    private function getLigado(){
        return $this->ligado;
    }

    /**
     * Get the value of marca
     */
    public function getMarca(): self{
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

//Programa principal

$obLiq = new Liquidificador();
$obLiq->ligarLiquidificador();
$obLiq->desligarLiquidificador();