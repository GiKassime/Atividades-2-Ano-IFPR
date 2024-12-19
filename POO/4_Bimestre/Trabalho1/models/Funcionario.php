<?php 

abstract class Funcionario {
    protected string $nome;
    protected float $salarioBase;
    
    abstract public function calculaSalario();
    public function __construct($nome) {
        $this->nome = $nome;
        $this->salarioBase = 1500;

    }

    /**
     * Get the value of nome
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of salarioBase
     */
    public function getSalarioBase(): float
    {
        return $this->salarioBase;
    }

    /**
     * Set the value of salarioBase
     */
    public function setSalarioBase(float $salarioBase): self
    {
        $this->salarioBase = $salarioBase;

        return $this;
    }
}

?>