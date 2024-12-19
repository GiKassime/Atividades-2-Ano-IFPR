<?php 
require_once 'Funcionario.php';

class Estagiario extends Funcionario {
    
    public function __toString()
    {
        return "\nO funcionário ".$this->nome.", cargo Estágiário, possui salário de R$".$this->calculaSalario();
    }
    public function calculaSalario(){
        return number_format($this->salarioBase * 0.8,2,',','.');
    }
}
?>