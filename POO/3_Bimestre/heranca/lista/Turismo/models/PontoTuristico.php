<?php 
require_once 'Espaco.php';
class PontoTuristico extends Espaco {
    private string $duracaoDaVisita;
    public function getDadosPontoTuristico(){
        
    }
    /**
     * Get the value of duracaoDaVisita
     */
    public function getDuracaoDaVisita(): string
    {
        return $this->duracaoDaVisita;
    }

    /**
     * Set the value of duracaoDaVisita
     */
    public function setDuracaoDaVisita(string $duracaoDaVisita): self
    {
        $this->duracaoDaVisita = $duracaoDaVisita;

        return $this;
    }
}

?>