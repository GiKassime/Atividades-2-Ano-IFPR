<?php 
require_once 'Veiculo.php';
require_once 'IVeiculo.php';

class CarroPasseio extends Veiculo implements IVeiculo{
    private $qtdPassageiros;
    public function getDados()
    {
            return "\nModelo: ". $this->modelo." | Velocidade Máxima : ".$this->velocidadeMax."Km | Cor: ". $this->cor." Quantidade de Passageiros: ".$this->qtdPassageiros;
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