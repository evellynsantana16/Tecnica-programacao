<?php
// VISIBILIDADE
//PUBLIC:DA PRA VER EM TD O CÓDIGO
//PRIVATE:SÓ DENTRO DA CLASSE
//SÓ DENTRO DA HERANÇA



class Produto2 {

    public function __construct(
    public string $nome = "",
    public float $preco = 0.00

    ){}

    public function Exibir(){
        echo "$this->nome - $this->preco<br>";
    }
}

?>