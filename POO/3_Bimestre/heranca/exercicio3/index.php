<?php 
require_once "models/Combatente.php";
require_once "models/Curandeiro.php";
require_once "models/Poder.php";
 
function criaCurandeiro($arrayPoderes){
    $mago = new Curandeiro();
    $mago->setNome(readline("Qual o nome do Mago Curandeiro?: "));
    echo "\n______PODERES______\n";
    echo"\n1-RECUPERA ENERGIA (força de cura)\n2-RECUPERA ENERGIA super(força de cura + 20%)\n";
    $mago->setPoder(readline("Qual o poder que você deseja atribuir ao Mago Curandeiro?: ")== 1 ? $arrayPoderes[0]: $arrayPoderes[1]);
    $mago->setForcaDeCura(readline("Qual a força de cura do Curandeiro? :"));
    return $mago;
}
function criaCombatente($arrayPoderes){
    $mago = new Combatente();
    $mago->setNome(readline("Qual o nome do Mago Combatente?: "));
    echo "\n______PODERES______\n";
    echo"\n1-GOLPE NORMAL (força de cura)\n2-GOLPE ESPECIAL(força de cura + 15%)\n";
    $mago->setPoder(readline("Qual o poder que você deseja atribuir ao Mago Curandeiro?: ") == 1 ? $arrayPoderes[2]: $arrayPoderes[3]);
    $mago->setForcaDeAtaque(readline("Qual a força de ataque do Combatente? :"));
    return $mago;
}
$arrayPoderes = array(
    new Poder("Recupera energia",0),
    new Poder("Recupera energia super",20),
    new Poder("Golpe normal",0),
    new Poder("Golpe especial",15)
);
$arrayMagos = array();

do {
    echo "\n______TIPOS DE MAGO______\n";
    echo"\n1-CURANDEIRO\n2-COMBATENTE\n3-LISTAR MAGOS\n0-SAIR\n";
    $resposta = readline("Qual o tipo de mago que vai escolher? :  ");
    switch ($resposta) {
        case 1:
            $mago = criaCurandeiro($arrayPoderes);
            array_push($arrayMagos, $mago );
            echo $mago->lancarPoder();
            break;
        
        case 2:
            $mago = criaCombatente($arrayPoderes);
            array_push($arrayMagos, $mago );
            echo $mago->lancarPoder();
            break;
        case 3:
            echo "\nLISTA MAGOS\n";
            foreach ($arrayMagos as $key => $mago) {
                echo "\n".($key+1)." - ".$mago;
            }
            break;
        default:
            echo "\nValor inválido";
            break;
    }
} while ($resposta != 0);
?>