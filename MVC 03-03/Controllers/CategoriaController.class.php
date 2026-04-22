<?php

require_once "Models/Conexao.class.php";
require_once "Models/CategoriaDAO.class.php";

class CategoriaController {

    public function listar() {
        $categoriaDAO = new CategoriaDAO();
        $retorno = $categoriaDAO->listar();

        echo "<pre>";
        var_dump($retorno);
        echo "</pre>";
    }

    public function inserir() {
        echo "Inserção funcionando!";
    }
}