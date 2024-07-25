<?php 

class Pokemon{

    public $nome,$tipo,$ataque,$defesa,$velocidade,$nivel,$experiencia,$pontosDeVida;
    public function __construct($nome,$tipo,$ataque,$velocidade,$nivel,$experiencia,$pontosDeVida,$defesa) {
        $this->nome = $nome;
        $this->tipo = $tipo;
        $this->ataque = $ataque;
        $this->velocidade = $velocidade;
        $this->nivel = $nivel;
        $this->experiencia = $experiencia;
        $this->pontosDeVida = $pontosDeVida;$this->defesa = $defesa;
    }
    public function fichaPokemon(){
        echo "\nO nome do pokemon é ". $this->nome;
        echo "\nO pokemon é do tipo ". $this->tipo; 
        echo "\nO ataque do pokemon é igual a ". $this->ataque;
        echo "\nA velocidade do pokemon é igual a ". $this->velocidade;
        echo "\nO nível do pokemon é igual a ". $this->nivel; 
        echo "\nA experiencia do pokemon é igual a ". $this->experiencia; 
        echo "\nOs pontos de vida do pokemon é igual a ". $this->pontosDeVida; 
        echo "\nA defesa do pokemon é igual a ". $this->defesa;
    }
    public function batalhar(){
        echo "O animal batalhou";
    } 
    private function aumentarNivel(){
        $this->nivel += 1;
        echo "Nivel aumentado";
    }  
    public function aumentarExperiencia(){
        $this->experiencia += 1;
        if($this->esperiencia)
        echo "A experiencia aumentada";
    } 
    public function aumentarPontosDeVida(){
        $this->pontosDeVida += 1;
    }
    public function diminuirPontosDeVida($quantidade) {
        $this->pontosDeVida -= $quantidade;
        if ($this->pontosDeVida < 0) {
            $this->pontosDeVida = 0;
        }
    }
}

$pokemon1 = new Pokemon("Pikachu", "Elétrico", 55, 40, 90, 5, 100, 35);
$pokemon2 = new Pokemon("Charmander", "Fogo", 50, 43, 65, 5, 100, 39);
$pokemon1->fichaPokemon();
echo "\n\n";
$pokemon2->fichaPokemon();
?>