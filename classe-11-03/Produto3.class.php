<?php
// VISIBILIDADE
//PUBLIC:DA PRA VER EM TD O CÓDIGO
//PRIVATE:SÓ DENTRO DA CLASSE
//SÓ DENTRO DA HERANÇA



class Produto3 {

    public function __construct( //se colocar private, n se cria nenhm ojeto fora da classe
    private string $nome = "",
    private float $preco = 0.00

    ){}

   public function Exibir(){
        echo "$this->nome - $this->preco<br>";
    }

    public function getNome(){
        return $this->nome;
    }

    public function getPreco(){
        return $this->preco;
    }

    public function setNome(string $nome){
        $this->nome = $nome;
    }

    public function setPreco(string $preco){
        $this->nome = $preco;
    }
}