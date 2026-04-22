<?php
class Cliente {
    public function __construct(
        private string $nome = "",
        private string $cpf = "",
        private array $celulares = array()
    ){}

    // GETS
    public function getNome(){
        return $this->nome;
    }

    public function getCpf(){
        return $this->cpf;
    }

    public function getCelulares(){
        return $this->celulares;
    }

    // SETS
    public function setNome($nome){
        $this->nome = $nome;
    }

    public function setCpf($cpf){
        $this->cpf = $cpf;
    }

    public function setCelulares(int $ddd, string $numero){
        $this->celulares[] = new Celular($ddd, $numero);
    }

   
}