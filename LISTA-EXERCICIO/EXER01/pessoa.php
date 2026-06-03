<?php

class Pessoa {

    public function __construct(
        private string $nome = "",
        private array $telefones = []
    ){}

    public function getNome(): string{
        return $this->nome;
    }

    public function setNome(string $nome): void{
        $this->nome = $nome;
    }

    public function getTelefones(): array{
        return $this->telefones;
    }

    public function setTelefones(array $telefones): void{
        $this->telefones = $telefones;
    }
}