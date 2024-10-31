<?php 
require_once 'models/Animal.php';
require_once 'models/Cachorro.php';
require_once 'models/Gato.php';
$gatos = array();
$cachorros = array();
for ($i=0; $i <= 1 ; $i++) { 
    $gato = new Gato();
    $gato->setNome(readline("Digite o nome do gato: "));
    $gato->setRaca(readline("Digite a raça do gato: "));
    array_push($gatos,$gato);
}
for ($i=0; $i <= 1 ; $i++) { 
    $cachorro = new Cachorro();
    $cachorro->setNome(readline("Digite o nome do cachorro: "));
    $cachorro->setRaca(readline("Digite a raça do cachorro: "));
    array_push($cachorros,$cachorro);
}
foreach ($gatos as $key => $gato) {
    echo "\n".($key+1)." - Gato\n".$gato->getDados()."\n".$gato->miar();
}
foreach ($cachorros as $key => $cachorro) {
    echo "\n".($key+1)." - Cachorro\n".$cachorro->getDados()."\n".$cachorro->latir();
}
?>