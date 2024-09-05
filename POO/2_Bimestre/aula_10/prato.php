<?php

class Prato{
    private string $descricao;
    private int $quantidade;
    private float $valorUnitario;

    public function __construct($descricao,$quantidade,$valorUnitario) {
        $this->descricao = $descricao;
        $this->quantidade = $quantidade;
        $this->valorUnitario = $valorUnitario;   
    }
    public function __toString()
    {
        return "\nquant - ".$this->quantidade." | ".$this->descricao." | ".$this->valorUnitario. " | " . $this->getValorTotal() ;
    }

    public function getValorTotal(){
        return $this->quantidade * $this->valorUnitario;
    }
    

    /**
     * Get the value of descricao
     */
    public function getDescricao(): string
    {
        return $this->descricao;
    }

    /**
     * Set the value of descricao
     */
    public function setDescricao(string $descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get the value of quantidade
     */
    public function getQuantidade(): int
    {
        return $this->quantidade;
    }

    /**
     * Set the value of quantidade
     */
    public function setQuantidade(int $quantidade): self
    {
        $this->quantidade = $quantidade;

        return $this;
    }

    /**
     * Get the value of valorUnitario
     */
    public function getValorUnitario(): float
    {
        return $this->valorUnitario;
    }

    /**
     * Set the value of valorUnitario
     */
    public function setValorUnitario(float $valorUnitario): self
    {
        $this->valorUnitario = $valorUnitario;

        return $this;
    }
}


$pratos = array();

for ($i=0; $i < 3; $i++) { 
    $descricao =  readline("Digite a descrição do prato ". ($i+1).": "); 
    $quantidade =  readline("Digite a quantidade do prato ". ($i+1).": "); 
    $valorUnitario =  readline("Digite o valor unitário do prato ". ($i+1).": ");
    $prato = new Prato($descricao,$quantidade,$valorUnitario);
    array_push($pratos,$prato);
}
$valortotal = 0;
foreach ($pratos as $prato) {
     echo $prato;
     $valortotal += $prato->getValorTotal();
}
echo "\nO valor total da janta é ". $valortotal;