<?php

class Cliente extends Pessoa {

    public function __construct(
        private string $cpf = "",
        string $nome = "",
        array $telefones = []
    ){
        parent::__construct($nome, $telefones);
    }

    public function getCpf(): string{
        return $this->cpf;
    }

    public function setCpf(string $cpf): void{
        $this->cpf = $cpf;
    }
}