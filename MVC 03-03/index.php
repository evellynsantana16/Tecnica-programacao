<?php

require_once 'controllers/clienteController.php';

$acao = $_GET['acao'] ?? 'listar_clientes';

$controller = new ClienteController();

switch ($acao) {

    case 'listar_clientes':
        $controller->listar();
        break;

    case 'cadastrar_cliente':
        $controller->cadastrar();
        break;

    case 'salvar_cliente':
        $controller->salvar();
        break;

    case 'editar_cliente':
        $controller->editar();
        break;

    case 'atualizar_cliente':
        $controller->atualizar();
        break;

    default:
        echo "Ação inválida";
}







