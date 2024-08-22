<?php 
 class Pessoa{
    //Atributos
    private string $nome;
    private string $endereco;
    private string $cidade;
    private string $uf;
    private string $altura;
    //Métodos

    //GET AND SETTERS
    public function __construct($nome,$endereco,$cidade,$uf,$altura) {
        $this->setNome($nome);
        $this->setEndereco($endereco);
        $this->setCidade($cidade);
        $this->setUf($uf);
        $this->setAltura($altura);
    }
    public function getApresentacao(){
        return "\nOlá mundo, sou ".$this->getNome().", resido no endereco ".$this->getEndereco().", ".$this->getCidade()."-".$this->getUf()." e possuo uma altura de ".$this->getAltura()."!";
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
     * Get the value of endereco
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * Set the value of endereco
     */
    public function setEndereco($endereco): self
    {
        $this->endereco = $endereco;

        return $this;
    }

    /**
     * Get the value of cidade
     */
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * Set the value of cidade
     */
    public function setCidade($cidade): self
    {
        $this->cidade = $cidade;

        return $this;
    }

    /**
     * Get the value of uf
     */
    public function getUf()
    {
        return $this->uf;
    }

    /**
     * Set the value of uf
     */
    public function setUf($uf): self
    {
        $this->uf = $uf;

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
  
 $obPe1 = new Pessoa("Ana Júlia","Fazendinha","Foz do Iguaçu","PR","1,68m");
 $obPe2 = new Pessoa("Leticia Correa", "Tres Bandeiras", "Foz do Iguaçu", "PR","1,54m");
 echo $obPe1->getApresentacao();
 echo $obPe2->getApresentacao();
?>