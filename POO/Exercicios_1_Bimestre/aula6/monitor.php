<?php

class Monitor{
    //Atributos
    public $cor,$resolucao,$marca;
    //Método
    public function ligar(){
        echo "Computador ligadooooooo";
    } 
    public function desligar(){
        echo "Computador desligadooooooo";
    }  
    public function mostrarImagem(){
        echo "Computador mostrando imagem ". $this->resolucao;
    }
}

$obMonitor = new Monitor();
$obMonitor->cor = "Azul";
$obMonitor->resolucao = "Ruim";
$obMonitor->marca = "Mayara";
$obMonitor->ligar();
$obMonitor->desligar();
$obMonitor->mostrarImagem();
echo "Cor do monitor1 ". $obMonitor->cor;
$obMonitor2 = new Monitor();
$obMonitor2->cor = "Roxo";
$obMonitor2->resolucao = "Maromeno";
$obMonitor2->marca = "helo";
$obMonitor2->ligar();
$obMonitor2->desligar();
$obMonitor2->mostrarImagem();
