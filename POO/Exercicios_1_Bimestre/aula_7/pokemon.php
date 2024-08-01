<?php

class Pokemon {
    //Atributos: características
    public $nome;
    public $tipo;
    
    //public $ataque;
    //public $defesa;
    //public $velocidade;

    public $nivel;
    public $pontosVida;
    public $experiencia;

    //Construtor
    function __construct() {
        $this->nivel = 1;
        $this->pontosVida = 10;
        $this->experiencia = 0;
    }
    //To string
     function __toString(){
        $texto .= "\nNome -> ". $this->nome;
        $texto .= "\nTipo -> ". $this->tipo; 
        //$texto .= "\nAtaque ->". $this->ataque;
        //$texto .= "\nVelocidade -> ". $this->velocidade;
        $texto .= "\nNível -> ". $this->nivel; 
        $texto .= "\nExperiencia -> ". $this->experiencia; 
        $texto .= "\nVida -> ". $this->pontosVida; 
        //$texto .= "\nDefesa -> ". $this->defesa;
        return $texto;
    }
    //Métodos: ações
    function batalhar() {
        $this->aumentarExperiencia(5);        
    }

    function aumentarNivel() {
        $this->nivel = $this->nivel +1;
        $this->aumentarPontosVida();
        $this->experiencia = 0;
    }

    function aumentarPontosVida() {
        $this->pontosVida = $this->nivel * 10;
    }

    function aumentarExperiencia($exp) {
        $this->experiencia += $exp;
        if($this->experiencia >= 100)
            $this->aumentarNivel();
    }
   



}//FINAL classe Pokemon


//Programa principal
$psyduck = new Pokemon();
$psyduck->nome = "Psyduck";
$psyduck->tipo = "Aquático";
//print_r($psyduck);

$lucario = new Pokemon();
$lucario->nome = "Lucario";
$lucario->tipo = "Lutador";
//print_r($lucario);

for ($i=0; $i < 4 ; $i++) { 
   $psyduck->batalhar();
}

echo $psyduck;
echo $lucario;
