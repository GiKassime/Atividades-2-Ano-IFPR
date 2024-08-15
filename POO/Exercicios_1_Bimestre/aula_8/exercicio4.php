<?php 
class Cidade{
    private int $populacao;
    private string $nome;
    private int $area;

    public function __construct($populacao,$nome,$area) {
        $this->setPopulacao($populacao);
        $this->setNome($nome);
        $this->setArea($area);
    }
    public function __toString()
    {
        $cidade  =$this->getNome()." tem ".$this->getPopulacao()." habitantes e ".$this->getArea()."m²";
        return $cidade;
    }
    public function aumentarPopulacao($populacao){
        $this->setPopulacao($populacao + $this->getPopulacao());
    }
    public function mudarNome($nome){
        $this->setNome($nome);
    }
    public function expandirArea($area){
        $this->setArea($area + $this->getArea());
    }
    public function reduzirArea($area){
        $this->setArea($area - $this->getArea());
    }
    /**
     * Get the value of populacao
     */
    public function getPopulacao()
    {
        return $this->populacao;
    }

    /**
     * Set the value of populacao
     */
    public function setPopulacao($populacao): self
    {
        $this->populacao = $populacao;

        return $this;
    }

    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of area
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * Set the value of area
     */
    public function setArea($area): self
    {
        $this->area = $area;

        return $this;
    }
}

$nome = readline("Digite o nome da cidade: ");
$populacao = readline("Digite a população da cidade: ");
$area = readline("Digite a área da cidade: ");
$obCidade = new Cidade($populacao,$nome,$area);
 
if($resposta = readline("\nSua população aumentou?('S' ou 'N') :") == "S"){
    $aumento = readline("Quanto?: ");
    $obCidade->aumentarPopulacao($aumento);
}
if($resposta = readline("\nSua área expandiu?('S' ou 'N') :") == "S"){
    $aumento = readline("Quanto?: ");
    $obCidade->expandirArea($aumento);
}
if($resposta = readline("\nQuer mudar o nome da sua cidade?('S' ou 'N') :") == "S"){
    $novoNome = readline("Qual o novo nome?: ");
    $obCidade->mudarNome($novoNome);
}

echo "\n".$obCidade;


?>