<?php 
require_once 'Veiculo.php';
require_once 'IVeiculo.php';

class Caminhao extends Veiculo implements IVeiculo{
    private $qtdCarga;
    private $altura;
    public function getDados()
    {
        return "\nModelo: ". $this->modelo." | Velocidade Máxima : ".$this->velocidadeMax."Km | Cor: ". $this->cor." Quantidade de Carga: ".$this->qtdCarga."Kg | Altura: ".$this->altura."m ";
    }
    /**
     * Get the value of qtdCarga
     */
    public function getQtdCarga()
    {
        return $this->qtdCarga;
    }

    /**
     * Set the value of qtdCarga
     */
    public function setQtdCarga($qtdCarga): self
    {
        $this->qtdCarga = $qtdCarga;

        return $this;
    }

    /**
     * Get the value of altura
     */
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * Set the value of altura
     */
    public function setAltura($altura): self
    {
        $this->altura = $altura;

        return $this;
    }
}
?>