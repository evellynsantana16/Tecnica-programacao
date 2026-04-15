<?php
class Categoria {
    private int $id_categoria;
    private string $descritivo;



    public function getIdCategoria(): int {
        return $this->id_categoria;
    }

    public function setIdCategoria(int $id): void {
      $this->id_categoria = $id;
    }





    public function getDescritivo(): string {
        return $this->$descritivo;
    }

    public function setDescritivo(string $descritivo): void {
      $this->descritivo = $descritivo;
    }

   
}