<?php 

class Receita{
    private string $descricao;
    private float $valor;
    public function __construct($descricao,$valor) {
        $this->descricao = $descricao;
        $this->valor = $valor;
    }
    public function __toString()
    {
        return sprintf("Descricao: %s\nValor:%.2f",$this->descricao,$this->valor);
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
     * Get the value of valor
     */
    public function getValor(): float
    {
        return $this->valor;
    }

    /**
     * Set the value of valor
     */
    public function setValor(float $valor): self
    {
        $this->valor = $valor;

        return $this;
    }  
}

class Despesa extends Receita{
    private string $descricao;
    private float $valor;
    
    public function __construct($descricao,$valor) {
        $this->descricao = $descricao;
        $this->valor = $valor;
    }
    public function __toString()
    {
        return sprintf("\nDescricao: %s\nValor:%.2f",$this->descricao,$this->valor);
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
     * Get the value of valor
     */
    public function getValor(): float
    {
        return $this->valor;
    }

    /**
     * Set the value of valor
     */
    public function setValor(float $valor): self
    {
        $this->valor = $valor;

        return $this;
    }
}
$receitas = array();
$despesas = array();
do {
    echo "\n\n-----------MENU-----------\n\n";
    echo "1-----ADICIONAR RECEITA---\n";
    echo "2-----ADICIONAR DESPESA---\n";
    echo "3-----LISTAR RECEITAS-----\n";
    echo "4-----LISTAR DESPESAS-----\n";
    echo "5-----SUMARIZAR-----------\n";
    echo "0-----SAIR----------------\n";
    $op = readline("Escolha uma opção: ");
            switch ($op) {
                case '1':
                    echo "\n\n-----ADICIONAR RECEITA-----\n\n"; 
                    $descricao = readline("Qual a descrição da receita?:");
                    $valor = readline("Qual o valor da receita?:");
                    if ($valor <= 0 || !is_numeric($valor)) {
                        echo "\nValor inválido";
                        break;
                    }else{
                        array_push($receitas, new Receita($descricao,$valor));
                        echo "DESPESA CADASTRADA!";
                    }
                    
                    
                break;
                case '2':
                    echo "\n\n-----ADICIONAR DESPESA-----\n\n"; 
                    $descricao = readline("Qual a descrição da despesa?:");
                    $valor = readline("Qual o valor da despesa?:");
                    if ($valor <= 0 || !is_numeric($valor)) {
                        echo "\nValor inválido";
                        break;
                    }else{
                        array_push($despesas, new Despesa($descricao,$valor));
                        echo "DESPESA CADASTRADA!";
                    }
                    
                break;
                case '3':
                    echo "\n\n---------RECEITAS---------\n\n"; 
                    if (empty($receitas)) {
                        echo "NENHUMA RECEITA CADASTRADA";
                        
                    }else{
                        foreach ($receitas as $key =>  $receita) {
                    
                        echo ($key+1)." - ".$receita;
                        } 
                    }
                    
                break;
                case '4':
                    echo "\n\n---------DESPESAS---------\n\n"; 
                    if (empty($despesas)) {
                        echo "NENHUMA DESPESA CADASTRADA";
                        
                    }else{
                        foreach ($despesas as $key => $despesa) {
                        echo ($key+1)." - ".$despesa;
                        }
                    }
                    
                break;
                case '5':
                    echo "\n\n---------SUMARIZAR--------\n\n";
                    $totReceita = 0;
                    $totDespesa = 0;
                    $total = 0;
                    foreach ($despesas as  $despesa) {
                        $totDespesa += $despesa->getValor();
                    }
                    foreach ($receitas as  $receita) {
                        $totReceita += $receita->getValor();
                    }
                    $total = $totReceita - $totDespesa;
                    printf("\nSaldo: R$ %.2f\nTotal de receitas: R$ %.2f\nTotal de despesas: R$ %.2f\n",$total,$totReceita,$totDespesa);
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
