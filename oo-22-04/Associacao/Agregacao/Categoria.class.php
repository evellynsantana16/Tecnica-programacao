<?php

class Categoria{
    public function __construct(private string $descritivo = "" ){}


//metodo get
  //metodos gets
  public function getDescritivo(){
    return $this->descritivo;
}

//metodo sets
public function setDescritivo ($descritivo){
    $this->descritivo = $descritivo;
}

}

