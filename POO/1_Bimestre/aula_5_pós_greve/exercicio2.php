<?php 
 
function perguntaArray($quant = 4){
    for ($i=0; $i < $quant ; $i++) { 
     $marca = readline("\nQual a Marca do Computador ". ($i+1). ": ");
     $processador = readline("\nQual a Processador do Computador ". ($i+1). ": ");
     $m_ram = readline("\nQual a Memória RAM do Computador ". ($i+1). ": ");
     $armazenamento = readline("\nQual a quantidade de Armazenamento do Computador ". ($i+1). ": ");

     $computador = array("Marca" => $marca, "Processador" => $processador, "Memória RAM" => $m_ram, "Armazenamento" => $armazenamento);
     $computadores["Computador ".($i+1)] = $computador;
  }
  return $computadores;
}
function mostraArray($array,$saida = ""){
    foreach ($array as $computador => $value) {
        echo $computador . " ";
        
        $primeiro = true;
        foreach ($value as $valor) {
            if ($primeiro) {
                echo $valor;
                $primeiro = false;
            } else {
                echo " | " . $valor;
            }
        }
        
        echo "\n";
    }       
 }
 $computadores = perguntaArray(); 
 mostraArray($computadores);       
  
?>