<?php

class Posto{

    private int $litrosGasolina;
    private array $abastecimentosGasolina;

    public function __construct() {
        $this->litrosGasolina = 0;
        $this->abastecimentosGasolina = array();
    }
    public function abastecer(int $litros){
        if($this->litrosGasolina >= $litros){
            $this->litrosGasolina -= $litros;
            array_push($this->abastecimentosGasolina,$litros);
            return true;
        }else{
            return false;
        }
    }
    public function reporEstoque(int $litros){
        $this->litrosGasolina += $litros;
        return "A quantidade de litros disponivéis no posto agora é de ". $this->litrosGasolina."L";
    }
    /**
     * Get the value of litrosGasolina
     */
    public function getLitrosGasolina(): int
    {
        return $this->litrosGasolina;
    }

    /**
     * Set the v# code...alue of litrosGasolina
     */
    public function setLitrosGasolina(int $litrosGasolina): self
    {
        $this->litrosGasolina = $litrosGasolina;

        return $this;
    }

    /**
     * Get the value of abastecimentosGasolina
     */
    public function getAbastecimentosGasolina(): array
    {
        return $this->abastecimentosGasolina;
    }

    /**
     * Set the value of abastecimentosGasolina
     */
    public function setAbastecimentosGasolina(array $abastecimentosGasolina): self
    {
        $this->abastecimentosGasolina = $abastecimentosGasolina;

        return $this;
    }
}

$obPosto = new Posto();
while (true) {
    do {
    echo"\n\n****Menu****\n1-Abastecer\n2-Repor Estoque\n3-Listar Abastecimentos\n0-SAIR\n";
    $op = readline("Escolha uma opção: ");
            switch ($op) {
                case '1':
                echo "\nO posto tem disponivel ". $obPosto->getLitrosGasolina()."L de Gasolina\n";
                    $litros =  readline("Quantos litros quer abastecer?: ");if ($litros <= 0 || !is_numeric($litros)) {
                        echo "\nValor inválido";
                        break;
                    }
                    if ($obPosto->abastecer($litros)){
                        echo "\nAbastecimento realizado com sucesso!!";
                    }else{
                        echo "\nNão há essa quantidade de gasolina disponivel no posto no momento!!";
                    }
                    
                break;
                case '2':
                    $litros =  readline("Quantos litros quer repor?: ");
                    if ($litros <= 0 || !is_numeric($litros)) {
                        echo "\nValor inválido";
                        break;
                    }
                    echo $obPosto->reporEstoque($litros);
                break;
                case '3':
                    foreach ($obPosto->getAbastecimentosGasolina() as $key => $abastecimento) {
                        echo "\nAbastecimento ". ($key + 1)." :". $abastecimento." litros";
                    }
                break;
                case '0':
                    echo "\nSaindo......";
                    die();
                    break;
                default:
                    echo "\nValor inválido\n";
                    break;
                }
    } while ($op != 0);


}