<?php 
require_once 'CarroPasseio.php';
require_once 'IVeiculo.php';
class Onibus extends CarroPasseio implements IVeiculo{
    private $pesoMax;
    private $qtdPassageiros;
    public function getDados()
    {
            return "\nModelo: ". $this->modelo." | Velocidade Máxima : ".$this->velocidadeMax."Km | Cor: ". $this->cor." Quantidade de Passageiros: ".$this->qtdPassageiros." | Peso Máximo: ".$this->pesoMax."Kg";
    }
    /**
     * Get the value of pesoMax
     */
    public function getPesoMax()
    {
        return $this->pesoMax;
    }

    /**
     * Set the value of pesoMax
     */
    public function setPesoMax($pesoMax): self
    {
        $this->pesoMax = $pesoMax;

        return $this;
    }

    /**
     * Get the value of qtdPassageiros
     */
    public function getQtdPassageiros()
    {
        return $this->qtdPassageiros;
    }

    /**
     * Set the value of qtdPassageiros
     */
    public function setQtdPassageiros($qtdPassageiros): self
    {
        $this->qtdPassageiros = $qtdPassageiros;

        return $this;
    }
}
?>