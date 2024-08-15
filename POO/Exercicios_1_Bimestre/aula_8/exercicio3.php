<<?php 

class Veiculo {
    private $capacidade;
    private $passagensVendidas;
    
    public function __construct($capacidade, $passagensVendidas) {
        $this->setCapacidade($capacidade);
        $this->setPassagensVendidas($passagensVendidas);
    }
    public function verificarCompra(){
        if ($this->passagensVendidas == 0) {
            echo "Aplicação encerrada ......";
            die;
        }
    }
    public function venderPassagem(): bool{
        if ($this->getCapacidade() >= $this->getPassagensVendidas()) {
           return true;
        }else{
            return false;
        }
    }
    /**
     * Get the value of capacidade
     */
    public function getCapacidade()
    {
        return $this->capacidade;
    }

    /**
     * Set the value of capacidade
     */
    public function setCapacidade($capacidade): self
    {
        $this->capacidade = $capacidade;

        return $this;
    }

    /**
     * Get the value of passagensVendidas
     */
    public function getPassagensVendidas()
    {
        return $this->passagensVendidas;
    }

    /**
     * Set the value of passagensVendidas
     */
    public function setPassagensVendidas($passagensVendidas): self
    {
        $this->passagensVendidas = $passagensVendidas;

        return $this;
    }
}

$capacidade = readline("Qual a capacidade do veículo? : ");
$passagensVendidas = readline("Qual a quantidade de passagens que deseja comprar? : ");
$obVeiculo = new Veiculo($capacidade,$passagensVendidas);
echo $obVeiculo->verificarCompra();
if ($obVeiculo->venderPassagem()) {
   echo "Passagens vendidas com sucesso!";
}else{
    echo "Não foi possivel realizar a compra pois a quantidade de passagens escolhidas foi maior que a capacidade do veículo";
}

?>