
<?php

class Celular {
    public function __construct(
        private int $ddd = 0,
        private string $numero = "",
        private ?Cliente $cliente = null
    ){}

    // GETS
    public function getDdd(){
        return $this->ddd;
    }

    public function getNumero(){
        return $this->numero;
    }

    public function getCliente(){
        return $this->cliente;
    }

    // SETS
    public function setDdd($ddd){
        $this->ddd = $ddd;
    }

    public function setNumero($numero){
        $this->numero = $numero;
    }

    public function setCliente($cliente){
        $this->cliente = $cliente;
    }
}