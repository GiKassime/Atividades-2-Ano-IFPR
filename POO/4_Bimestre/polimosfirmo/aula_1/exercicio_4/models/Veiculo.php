<?php 
abstract class Veiculo{
    protected float $valorAluguel;
    protected float $qtdKmRodados;

    public function __construct($aluguel,$km) {
        $this->valorAluguel = $aluguel;
        $this->qtdKmRodados = $km;
    }
    public function __toString()
    {
        return "\nO veículo ".$this->getTipo().", foi alugado por R$ ".$this->valorAluguel.", rodou ".$this->qtdKmRodados." quilômetros com custo total de R$ ".$this->calcularTotal().".\n";
    }
    abstract public function calcularTotal(); 
    abstract public function getTipo();

    /**
     * Get the value of valorAluguel
     */
    public function getValorAluguel(): float
    {
        return $this->valorAluguel;
    }

    /**
     * Set the value of valorAluguel
     */
    public function setValorAluguel(float $valorAluguel): self
    {
        $this->valorAluguel = $valorAluguel;

        return $this;
    }

    /**
     * Get the value of qtdKmRodados
     */
    public function getQtdKmRodados(): float
    {
        return $this->qtdKmRodados;
    }

    /**
     * Set the value of qtdKmRodados
     */
    public function setQtdKmRodados(float $qtdKmRodados): self
    {
        $this->qtdKmRodados = $qtdKmRodados;

        return $this;
    }
}
?>