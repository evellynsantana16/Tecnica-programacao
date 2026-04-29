<?php
class Telefne {
    public function __construct(
        private int $ddd = 0,
        private string $numero = ""){}

        // GETS
    public function getDdd(){
        return $this->ddd;
    }

    public function getNumero(){
        return $this->numero;
    }

    // SETS
    public function setDdd($ddd){
        $this->ddd = $ddd;
    }

    public function setNumero($numero){
        $this->numero = $numero;
    }

}
    