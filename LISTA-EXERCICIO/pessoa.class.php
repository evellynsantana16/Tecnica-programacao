<<?php

class Pessoa {
    public function __construct(
        private string $nome = "",
        protected array $telefones = []
    ) {}

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    // adiciona telefone no array
    public function addTelefone($ddd, $numero) {
        $this->telefones[] = [
            "ddd" => $ddd,
            "numero" => $numero
        ];
    }

    public function getTelefones() {
        return $this->telefones;
    }
}