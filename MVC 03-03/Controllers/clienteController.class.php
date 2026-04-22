<?php

class Cliente {

    private $conn;

    public function __construct() {
        $this->conn = new mysqli("localhost", "root", "", "lojaa");
    }

    public function listar() {
        $sql = "SELECT * FROM clientes";
        return $this->conn->query($sql);
    }

    public function salvar($dados) {
        $sql = "INSERT INTO clientes (nome, email)
                VALUES ('{$dados['nome']}', '{$dados['email']}')";
        return $this->conn->query($sql);
    }

    public function buscarPorId($id) {
        $sql = "SELECT * FROM clientes WHERE id = $id";
        return $this->conn->query($sql)->fetch_assoc();
    }

    public function atualizar($dados) {
        $sql = "UPDATE clientes 
                SET nome = '{$dados['nome']}', email = '{$dados['email']}'
                WHERE id = {$dados['id']}";
        return $this->conn->query($sql);
    }
}