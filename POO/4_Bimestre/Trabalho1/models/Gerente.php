<?php 
require_once 'Funcionario.php';

class Gerente extends Funcionario {
    
    public function __toString()
    {
        return "\nO funcionário ".$this->nome.", cargo Gerente, possui salário de R$".$this->calculaSalario();
    }
    public function calculaSalario(){
        return  number_format($this->salarioBase * 4.5,2,',','.');
    }
}
?>