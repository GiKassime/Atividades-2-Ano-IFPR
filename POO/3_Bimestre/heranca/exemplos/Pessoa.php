<?php 

class Pessoa {
    private string $nome;
    private int $idade;
    private int $rg;

    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getNome(){
        return $this->nome;
    }
    public function setIdade($idade){
        $this->idade = $idade;
    }
    public function getIdade(){
        return $this->idade;
    }
    public function setRg($rg){
        $this->idade = $rg;
    }
    public function getRg(){
        return $this->rg;
    }


}
?>