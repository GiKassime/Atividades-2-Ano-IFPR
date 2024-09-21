<?php 
require_once 'Pais.php';
class Atleta{
    private string $nome;
    private int $idade;
    private string $esporte;
    private Pais $pais;
    
    public function __construct($nome,$idade,$esporte,$pais) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->esporte = $esporte;
        $this->pais = $pais;
    }

    public function __toString()
    {
        return "{$this->nome} é atleta do {$this->pais->getNome()}, continente {$this->pais->getContinente()}, possui {$this->idade} anos e atua no esporte {$this->esporte} ";
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
     * Get the value of idade
     */
    public function getIdade(): int
    {
        return $this->idade;
    }

    /**
     * Set the value of idade
     */
    public function setIdade(int $idade): self
    {
        $this->idade = $idade;

        return $this;
    }

    /**
     * Get the value of esporte
     */
    public function getEsporte(): string
    {
        return $this->esporte;
    }

    /**
     * Set the value of esporte
     */
    public function setEsporte(string $esporte): self
    {
        $this->esporte = $esporte;

        return $this;
    }

    /**
     * Get the value of pais
     */
    public function getPais(): Pais
    {
        return $this->pais;
    }

    /**
     * Set the value of pais
     */
    public function setPais(Pais $pais): self
    {
        $this->pais = $pais;

        return $this;
    }
}
?>