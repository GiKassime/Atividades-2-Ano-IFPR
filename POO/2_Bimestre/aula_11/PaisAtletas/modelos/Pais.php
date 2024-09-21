<?php 

class Pais {
    private string $nome;
    private string $continente;


    public function __construct($nome,$continente) {
        $this->nome = $nome;
        $this->continente = $continente;
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
     * Get the value of continente
     */
    public function getContinente(): string
    {
        return $this->continente;
    }

    /**
     * Set the value of continente
     */
    public function setContinente(string $continente): self
    {
        $this->continente = $continente;

        return $this;
    }
}


?>