<?php
class Itens {
private int $id_itens;
private int $quantidade;
private float $precoUnitario;


public function getIdItens ():  int {
    return $this -> $id_itens;
}


public function setIdItens(int $id): void {
    $this->id_itens = $id;
}


public function getQuantidade(): int {
    return $this->$quantidade;
}

public function setQuantidade (int $quantidade): void {
    $this->quantidade =$quantidade;
}

public function getPrecoUnitario(): float {
    return $this->$precoUnitario;
}

public function setPrecoUnitario(float $precoUnitario): void {
    $this->precoUnitario =$precoUnitario;
}

}