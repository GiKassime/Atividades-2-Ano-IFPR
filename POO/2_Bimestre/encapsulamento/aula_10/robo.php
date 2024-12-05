<?php 

class Robo {
    private string $nome;
    private string $tipo;
    private string $qtnSensores;

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
     * Get the value of tipo
     */
    public function getTipo(): string
    {
        return $this->tipo;
    }

    /**
     * Set the value of tipo
     */
    public function setTipo(string $tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get the value of qtnSensores
     */
    public function getQtnSensores(): string
    {
        return $this->qtnSensores;
    }

    /**
     * Set the value of qtnSensores
     */
    public function setQtnSensores(string $qtnSensores): self
    {
        $this->qtnSensores = $qtnSensores;

        return $this;
    }
}

//Programa principal
