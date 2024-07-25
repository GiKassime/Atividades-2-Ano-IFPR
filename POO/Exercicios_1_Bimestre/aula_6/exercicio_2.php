<?php 

class Retangulo{
    public $base,$altura;
    public function __construct($base,$altura) {
        $this->base = $base;
        $this->altura = $altura;
    }
    public function area(){
        $area = $this->altura * $this->base;
        return $area;
    } 
    public function perimetro(){
        $perimetro = ($this->base*2)+($this->altura*2);
        return $perimetro;
    }
}
for ($i=1; $i < 4; $i++) { 
   echo "\n\nRETANGULO ".$i."\n";
   $obRetangulo = new Retangulo(readline("Qual a base do retangulo?: "),readline("Qual a altura do retangulo?: "));
   echo "\nA area do TRIANGULO ".$i." é igual a ".$obRetangulo->area(); 
   echo "\nO perimetro do TRIANGULO ".$i." é igual a ".$obRetangulo->perimetro();
}

?>