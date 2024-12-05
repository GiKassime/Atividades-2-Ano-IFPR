<?php 
require_once  'modelo/Time.php';
require_once  'modelo/Jogador.php';
//criar ob time
$obTime = new Time();
$obTime->setNome("Gremio");
$obTime->setCidade("Porto Alegre");
print_r($obTime);

//criar ob jogador
$obJogador = new Jogador();
$obJogador->setNome("Gabriel");
$obJogador->setNumero(2);
$obJogador->setTime($obTime);
print_r($obJogador);

//imprimir nome jogador 

echo $obJogador->getTime()->getNome();


//colocar em array



?>