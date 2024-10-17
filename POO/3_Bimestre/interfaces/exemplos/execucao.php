<?php 
require_once ('modelo/RadioPortatil.php');
require_once ('modelo/RadioRelogio.php');
$tipo = "RP";
$radio = null;
if($tipo == "RP"){
    $radio = new RadioRelogio;
    $radio->setCorTela("AMARELO");
    $radio->setMarca("AMARELO");
}else if ($tipo == "RR") {
    $radio = new RadioPortatil;
    $radio->setCor("AMARELO");
    $radio->setMarca("AMARELO");
}
$radio->ligarRadio();
$radio->desligarRadio();
if ($radio instanceof IRelogio) {
    $radio->mostrarHora();
}