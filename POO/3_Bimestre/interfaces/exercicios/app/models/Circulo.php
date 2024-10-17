<?php 
require_once ("IFormaGeometrica.php");

class Circulo implements IFormaGeometrica{
    private $raio;
    public function getArea(){
        $area = pi()*(pow($this->raio,2));
        return  number_format($area,2); 
    }
    public function getDesenho(){
        
        return "    ***    \n" .
                " *       * \n" .
                "*         *\n" .
                "           \n" .
                "*         *\n" .
                 " *       * \n" .
                "    ***    \n";   
    }
    /**
     * Get the value of raio
     */
    public function getRaio()
    {
        return $this->raio;
    }

    /**
     * Set the value of raio
     */
    public function setRaio($raio): self
    {
        $this->raio = $raio;

        return $this;
    }
}
?>