<?php 
require_once 'Mago.php';

class Curandeiro extends Mago {
    private int $forcaDeCura;

    public function lancarPoder(){
        return "\nLANÇANDO UM PODER\nO mago ".$this->nome.", do tipo Curandeiro, possui força de Cura ".$this->forcaDeCura." e lançou o poder".$this->poder->getDescricao()." com força total de ".$this->poder->getForcaTotal($this->forcaDeCura).".";
    }

    /**
     * Get the value of forcaDeCura
     */
    public function getForcaDeCura(): int
    {
        return $this->forcaDeCura;
    }

    /**
     * Set the value of forcaDeCura
     */
    public function setForcaDeCura(int $forcaDeCura): self
    {
        $this->forcaDeCura = $forcaDeCura;

        return $this;
    }
}
?>