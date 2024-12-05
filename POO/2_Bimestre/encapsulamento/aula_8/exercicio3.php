<?php 

class Veiculo {
    private $capacidade;
    private $passagensVendidas;
    
    public function __construct($capacidade) {
        $this->setCapacidade($capacidade);
    }
    public function passagensDisponiveis(){
        return $this->getCapacidade() - $this->getPassagensVendidas();
    }
    public function venderPassagem($passagens): bool{
        if ($this->getCapacidade() >= $this->getPassagensVendidas() + $passagens) {
            $this->setPassagensVendidas($passagens);
           return true;
        }else{
            return false;
        }
    }
    public function __toString()
    {
        return sprintf("Capacidade: %d | Passagens Vendidas %d\n",$this->getCapacidade(),$this->getPassagensVendidas());   
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
        $this->passagensVendidas += $passagensVendidas;

        return $this;
    }
}

$capacidade = readline("Qual a capacidade do veículo? : ");        
$obVeiculo = new Veiculo($capacidade);
while (true) {
        echo "\nPassagens disponiveis ". $obVeiculo->passagensDisponiveis()."\n";
        $passagensVendidas = readline("Qual a quantidade de passagens que deseja comprar? : ");
        if($passagensVendidas == 0){
            break;
        }
        if ($obVeiculo->venderPassagem($passagensVendidas)) {
            echo "\nPassagens vendidas com sucesso!";
            echo $obVeiculo;
        }else{
            echo "\nNão foi possivel realizar a compra pois a quantidade de passagens escolhidas foi maior que a capacidade do veículo";
        }
} 
echo "\nAplicação encerrada.........";
?>