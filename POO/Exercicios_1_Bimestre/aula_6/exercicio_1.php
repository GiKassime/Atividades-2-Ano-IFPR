<?php 

class Pessoa {
    public $nome,$endereco,$cidade,$uf,$altura;
    public  function __construct($nome,$endereco,$cidade,$uf,$altura) {
        $this->nome = $nome;
        $this->endereco = $endereco ;
        $this->cidade =  $cidade;
        $this->uf = $uf;
        $this->altura =  $altura;
    }
    public function falarOla(){
        echo "\nOlá mundo, sou ". $this->nome;
    } 
    public function falarEndereco(){
        echo "\nMoro em ". $this->endereco.", ".$this->cidade."/". $this->uf;
    }
    public function falarAltura(){
        echo "\nTenho ". $this->altura. " metros!";
    }
}
$nome = readline("Qual o seu nome?: ");
$endereco = readline("Qual o seu endereço?: ");
$cidade = readline("Qual o sua cidade?: ");
$uf = readline("Qual o UF?: ");
$altura = readline("Qual sua altura?: ");
$obPessoa =  new Pessoa($nome,$endereco,$cidade,$uf,$altura);
$obPessoa->falarOla();
$obPessoa->falarEndereco();
$obPessoa->falarAltura();
?>