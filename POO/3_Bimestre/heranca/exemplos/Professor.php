<?php 
require_once 'Pessoa.php';
class Professor extends Pessoa{
    private $salario;
    public function getSalario(){
        return $this->salario;
    }
    public function setSalario($salario){
        $this->salario = $salario;
    }
}


?>