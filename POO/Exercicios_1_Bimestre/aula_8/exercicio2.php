<?php 

class Calculadora {
    private $numA;
    private $numB;
    
    public function __construct($numA,$numB) {
        $this->setNumA($numA);
        $this->setNumB($numB);
    }
    public function todasOperacoes(){
        return "\nSoma ".$this->getNumA()." + ".$this->getNumB()." = ".$this->somar()."\nDivisão ".$this->getNumA()." / ".$this->getNumB()." = ".$this->dividir()."\nMultiplicação ".$this->getNumA()." * ".$this->getNumB()." = ".$this->multiplicar()."\nResto ".$this->getNumA()." % ".$this->getNumB()." = ".$this->resto();
    }
    public function somar(){
        return $this->getNumA() + $this->getNumB();
    }
    public function subtrair(){
        return $this->getNumA() - $this->getNumB();
    }
    public function dividir(){
        return $this->getNumA() / $this->getNumB();
    }
    public function multiplicar(){
        return $this->getNumA() * $this->getNumB();
    }
    public function resto(){
        return $this->getNumA() % $this->getNumB();
    }
    

    /**
     * Get the value of numA
     */
    public function getNumA()
    {
        return $this->numA;
    }

    /**
     * Set the value of numA
     */
    public function setNumA($numA): self
    {
        $this->numA = $numA;

        return $this;
    }

    /**
     * Get the value of numb
     */
    public function getNumB()
    {
        return $this->numB;
    }

    /**
     * Set the value of numb
     */
    public function setNumB($numB): self
    {
        $this->numB = $numB;

        return $this;
    }
}
$numA = readline("Digite o primeiro número: ");
$numB = readline("Digite o segundo número: ");
 $obCalculadora  =  new Calculadora($numA,$numB);
 echo $obCalculadora->todasOperacoes();
?>