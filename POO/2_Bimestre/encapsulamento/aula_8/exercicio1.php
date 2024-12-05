<?php 
class Carro {
    private $modelo;
    private $marca;
    private $anoFabricacao;
    private $velocidadeMax;
    public function __construct($modelo,$marca,$anoFabricacao,$velocidadeMax) {
        $this->modelo = $modelo;
        $this->marca = $marca;
        $this->anoFabricacao = $anoFabricacao;
        $this->velocidadeMax = $velocidadeMax;
    }
    public function __toString()
    {
        $carro  =$this->getModelo()."-".$this->getMarca().", fabricado em ".$this->getAnoFabricacao().",  com  velocidade máxima de ".$this->getVelocidadeMax()."km/h.";
        return $carro;
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

$carros = array();
for ($i=1; $i < 4; $i++) { 
   $modelo = readline("Qual o modelo do carro ".$i.": ");
   $marca = readline("Qual a marca do carro ".$i.": ");
   $anoFabricacao = readline("Qual o ano de fabricação do carro ".$i.": ");
   $velocidadeMax = readline("Qual a velocidade  máxima do carro ".$i.": ");
   $carros[$i] = new Carro($modelo,$marca,$anoFabricacao,$velocidadeMax);
}
$carroveloz = $carros[1];
$carrolerdo =$carros[1];
foreach ($carros as $carro) {
    if ($carro->getVelocidadeMax() > $carroveloz->getVelocidadeMax()) {
        $carroveloz = $carro;
    }
    if ($carro->getVelocidadeMax() < $carrolerdo->getVelocidadeMax()) {
        $carrolerdo = $carro;
    }
}
echo "\nO carro mais rápido é ". $carroveloz;
echo "\nO carro mais lento é ". $carrolerdo;
?>