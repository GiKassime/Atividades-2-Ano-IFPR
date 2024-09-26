<?php 

class Funcionario {
    private string $nome;
    private string $cargo;
    private float $salario;
    private Departamento $departamento;
    
    public function __construct($nome,$cargo,$salario,$departamento) {
        $this->nome = $nome;
        $this->cargo = $cargo;
        $this->salario = $salario;
        $this->departamento = $departamento;
    }

    public function __toString()
    {
        return " Funcionario: {$this->nome}, Cargo: {$this->cargo}, Salario {$this->salario}, Departamento {$this->departamento->getNome()}, Número sala {$this->departamento->getNumeroSala()}";
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
     * Get the value of cargo
     */
    public function getCargo(): string
    {
        return $this->cargo;
    }

    /**
     * Set the value of cargo
     */
    public function setCargo(string $cargo): self
    {
        $this->cargo = $cargo;

        return $this;
    }

    /**
     * Get the value of salario
     */
    public function getSalario(): float
    {
        return $this->salario;
    }

    /**
     * Set the value of salario
     */
    public function setSalario(float $salario): self
    {
        $this->salario = $salario;

        return $this;
    }

    /**
     * Get the value of departamento
     */
    public function getDepartamento(): Departamento
    {
        return $this->departamento;
    }

    /**
     * Set the value of departamento
     */
    public function setDepartamento(Departamento $departamento): self
    {
        $this->departamento = $departamento;

        return $this;
    }
}


?>