<?php 

abstract class Midia{
    private float $preco;
    private string $nome;

    abstract public function getTipo();
    public function __toString()
    {
        return "Nome: ".$this->nome."Preco: $this->preco";
    }

    /**
     * Get the value of preco
     */
    public function getPreco(): float
    {
        return $this->preco;
    }

    /**
     * Set the value of preco
     */
    public function setPreco(float $preco): self
    {
        $this->preco = $preco;

        return $this;
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
}