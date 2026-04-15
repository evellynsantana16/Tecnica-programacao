<?php

class clienteController{

    function inserir(){

    }


    function alterar(){

    }


    function listar(){

        require_once "Models/Cliente.class.php";
        $cliente = new Cliente();
        $retorno = $cliente->clientes;
        require_once "Views/listar_clientes.php";
    }




}
?>