<?php 
require_once 'Estado.php';
class Cidade {
    private string $nome;
    private int $qtdHabitantes;
    private float $altitude;
    private Estado $estado;

    public function __toString()
    {
        return "\nA cidade de nome ".$this->getNome().", localizada no estado ".$this->getEstado()->getNome()."-".$this->getEstado()->getSigla().", possui ".$this->getQtdHabitantes()." habitantes e uma altitude de ".$this->getAltitude()." metros";
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
     * Get the value of qtdHabitantes
     */
    public function getQtdHabitantes(): int
    {
        return $this->qtdHabitantes;
    }

    /**
     * Set the value of qtdHabitantes
     */
    public function setQtdHabitantes(int $qtdHabitantes): self
    {
        $this->qtdHabitantes = $qtdHabitantes;

        return $this;
    }

    /**
     * Get the value of altitude
     */
    public function getAltitude(): float
    {
        return $this->altitude;
    }

    /**
     * Set the value of altitude
     */
    public function setAltitude(float $altitude): self
    {
        $this->altitude = $altitude;

        return $this;
    }

    /**
     * Get the value of estado
     */
    public function getEstado(): Estado
    {
        return $this->estado;
    }

    /**
     * Set the value of estado
     */
    public function setEstado(Estado $estado): self
    {
        $this->estado = $estado;

        return $this;
    }
}
?>