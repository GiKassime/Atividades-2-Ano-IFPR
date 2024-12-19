<?php 
require_once 'Funcionario.php';

class Desenvolvedor extends Funcionario {
    
    public function __toString()
    {
        return "\nO funcionário ".$this->nome.", cargo Desenvolvedor, possui salário de R$".$this->calculaSalario();
    }
    public function calculaSalario(){
        return number_format($this->salarioBase * 2.3,2,',','.');
    }
}
?>