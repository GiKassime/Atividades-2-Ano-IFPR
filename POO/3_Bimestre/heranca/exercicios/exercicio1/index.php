<?php 
require_once 'models/Caminhao.php';
require_once 'models/Onibus.php';
require_once 'models/CarroPasseio.php';
$carroPasseio = new CarroPasseio("Kwid","500","Abóbora");
$onibus = new Onibus("Parati","0.3","Azul");
$onibus->setQtdPassageiros("100");
$onibus->setPesoMax("400");
$caminhao = new Caminhao("Furgão","200","Preto");
$caminhao->setQtdCarga("60");
$caminhao->setQtdCarga("60");
?>