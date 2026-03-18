<?php
class Produto {
    private int $id_produto;
    private string $nome;
    private string $descricao;
    private int $estoque;
    private float $preco;

    public function getIdProduto(): int {
        return $this->id_produto;
    }

    public function setIdProduto(int $id): void {
      $this->id_produto = $id;
    }


    public function getNome(): string {
        return $this->nome;
    }

    public function setNome(string $nome): void {
         $this->nome = $nome;
    }


    public function getDescricao(): string {
        return $this->$descricao;
    }

    public function setDescricao(string $descricao): void {
         $this->descricao = $descricao;
    }

    public function getEstoque(): int {
        return $this->$estoque;
    }

    public function setEstoque(int $estoque): void {
         $this->estoque = $estoque;
    }

    public function getPreco (): float {
        return $this -> $preco;
    }

    public function setPreco (float $preco) : void {
        $this->preco = $preco;
    }




}