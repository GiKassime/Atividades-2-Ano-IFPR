<?php 
require_once ("IFormaGeometrica.php");

class Quadrado implements IFormaGeometrica{
    private $lado;
    public function getArea(){
        $area = pow($this->lado,2);
        return $area; 
    }
    /**
     * Get the value of lado
     */
    public function getLado()
    {
        return $this->lado;
    }
    public function getDesenho(){
        return "┌───────────────────┐\n│                   │\n│                   │\n│                   │\n│                   │\n│                   │\n│                   │\n│                   │\n│                   │\n│                   │\n└───────────────────┘\n

        ";
    }
    /**
     * Set the value of lado
     */
    public function setLado($lado): self
    {
        $this->lado = $lado;

        return $this;
    }
}
?>