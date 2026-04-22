<?php
class Produto{
    public function __construct(
        private string $nome = "",
        private float $preco = 0.00,
        private array $categorias = array()

    ){}
    //metodos gets
    public function getNome(){
        return $this->nome;
    }

    public function getPreco(){
        return $this->preco;
    }

    public function getCategorias(){
        return $this->categorias;
    }

    //metodos sets

    public function setNome($nome){
        $this->nome = $nome;
    }

    
    public function setPreco($preco){
        $this->preco = $preco;
    }

    
    public function setCategorias($categorias){
        $this->categorias[] = $categorias;
    }

}// fim da classe
