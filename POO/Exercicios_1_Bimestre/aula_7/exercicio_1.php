<?php 

class Especie{
    public $nome,$especie,$patas,$pele,$tipoDeSom,$movimento;
    public function __construct($nome,$especie,$patas,$pele,$tipoDeSom,$movimento) {
        $this->especie = $especie;
        $this->nome = $nome;
        $this->patas = $patas;
        $this->pele = $pele;
        $this->tipoDeSom =$tipoDeSom;
        $this->movimento = $movimento;
    }
    public function emitirSom(){
        echo "\nO animal faz ".$this->tipoDeSom;
    }  
    public function especie(){
        echo "\nO animal ".$this->nome." é da espécie ".$this->especie;
    } 
    public function movimento(){
        echo "\nO animal ".$this->movimento;
    }
    public function patas(){
        echo "\nO animal tem ".$this->patas." patas";
    }
     public function pele(){
        echo "\nO animal tem ".$this->pele;
    }
}
for ($i=1; $i < 6; $i++) { 
    echo "\nANIMAL ".$i."\n";
    $nome = readline("\nQual o nome do animal?");
    $especie = readline("\nQual a especie do animal?");
    $patas = readline("\nQuantas patas tem o animal?");
    $pele = readline("\nQual o tipo de pele do animal?");
    $tipoDeSom = readline("\nQual o tipo de som que é emitido pelo animal?"); 
    $movimento = readline("\nQual o movimento feito pelo animal?");
    $obEspecie = new Especie($nome,$especie,$patas,$pele,$tipoDeSom,$movimento);
    $obEspecie->especie(); 
    $obEspecie->emitirSom(); 
    $obEspecie->movimento();
    $obEspecie->patas();
    $obEspecie->pele();
 }

?>