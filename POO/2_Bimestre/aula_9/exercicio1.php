<?php 

class Produto{
    private string $descricao;
    private string $unidadeMedida;
    private int $quantidade;
    private float $valorUnitario;

    public function __construct($descricao,$unidadeMedida,$quantidade,$valorUnitario) {
        $this->descricao = $descricao;
        $this->unidadeMedida = $unidadeMedida;
        $this->quantidade = $quantidade;
        $this->valorUnitario = $valorUnitario;
    }
    public function __toString()
    {
        return sprintf("Produto: %s (%s) | %d X %.2f = %.2f\n",$this->descricao,$this->unidadeMedida,$this->quantidade,$this->valorUnitario,$this->getValorTotal());
    }
    public function getValorTotal():float{
        return $this->valorUnitario * $this->quantidade;
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
     * Get the value of unidadeMedida
     */
    public function getUnidadeMedida(): string
    {
        return $this->unidadeMedida;
    }

    /**
     * Set the value of unidadeMedida
     */
    public function setUnidadeMedida(string $unidadeMedida): self
    {
        $this->unidadeMedida = $unidadeMedida;

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
$produtos = array();
$quantProdutos= readline("Quantos produtos deseja comprar?: ");
for ($i=0; $i < $quantProdutos; $i++) { 
    $descricao = readline("Qual a descrição do produto ".($i+1).": ");
    $unidadeMedida = readline("Qual a unidade de medida do produto ".($i+1).": ");
    $quantidade = readline("Qual a quantidade do produto ".($i+1).": ");
    $valorUnitario = readline("Qual o valor unitário do produto ".($i+1).": ");
    $produtos[$i] = new Produto($descricao,$unidadeMedida,$quantidade,$valorUnitario);
 }
 foreach ($produtos as $produto) {
    echo $produto;
 }
 $vendaMaior = $produtos[1];
 for ($i=0; $i < count($produtos) ; $i++) { 
    if ($vendaMaior->getValorTotal() < 
        $produtos[$i]->getValorTotal()) {
    $vendaMaior = $produtos[$i];
    }
 }
 echo "Venda com o maior valor total do ".$vendaMaior;
?>