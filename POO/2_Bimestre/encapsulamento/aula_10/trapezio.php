<?php   

class  Trapezio {
    private $baseMaior;
    private $baseMenor;
    private $altura;
    
    public function __construct($baseMaior,$baseMenor,$altura) {
        $this->baseMaior = $baseMaior;
        $this->baseMenor = $baseMenor;
        $this->altura = $altura;
    }
    public function __toString()
    {
        return "Trapezio com base maior de $this->baseMaior, base menor $this->baseMenor e altura igual a $this->altura";
    }
    public function calcArea(){
        return (($this->baseMaior + $this->baseMenor) * $this->altura)/2;   
    }
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


$trapezios = array();

for ($i=0; $i < 3; $i++) { 
    $baseMaior =  readline("Digite a base maior do Trapezio ". ($i+1).": "); 
    $baseMenor =  readline("Digite a base menor do Trapezio ". ($i+1).": "); 
    $altura =  readline("Digite a altura do Trapezio ". ($i+1).": ");
    $trapezio = new Trapezio($baseMaior,$baseMenor,$altura);
    array_push($trapezios,$trapezio);
}

$trapezioMaior = $trapezios[1];
foreach ($trapezios as $trapezio) {
    if ($trapezio->calcArea() > $trapezioMaior->calcArea()) {
        $trapezioMaior = $trapezio;
    }
}

echo "\nO trapézio que possui a maior área é \n".$trapezioMaior; 
