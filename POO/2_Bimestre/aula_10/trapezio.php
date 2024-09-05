<?php   

class  Trapezio {
    private $baseMaior;
    private $baseMenor;
    private $altura;
    

    /**
     * Get the value of baseMaior
     */
    public function getBaseMaior()
    {
        return $this->baseMaior;
    }

    /**
     * Set the value of baseMaior
     */
    public function setBaseMaior($baseMaior): self
    {
        $this->baseMaior = $baseMaior;

        return $this;
    }

    /**
     * Get the value of baseMenor
     */
    public function getBaseMenor()
    {
        return $this->baseMenor;
    }

    /**
     * Set the value of baseMenor
     */
    public function setBaseMenor($baseMenor): self
    {
        $this->baseMenor = $baseMenor;

        return $this;
    }

    /**
     * Get the value of altura
     */
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * Set the value of altura
     */
    public function setAltura($altura): self
    {
        $this->altura = $altura;

        return $this;
    }
}