<?php

class Contratado extends Pessoa {

    public function __construct(
        private string $cnpj = "",
        string $nome = "",
        array $telefones = []
    ){
        parent::__construct($nome, $telefones);
    }

    public function getCnpj(): string{
        return $this->cnpj;
    }

    public function setCnpj(string $cnpj): void{
        $this->cnpj = $cnpj;
    }
}