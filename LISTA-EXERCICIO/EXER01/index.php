<?php
require_once "pessoa.php";
require_once "cliente.php";
require_once "contratado.php";
require_once "decoracao.php";
require_once "festa.php";
require_once "telefone.php";

$telefone1 = new Telefone("14", "99172-3056");

$telefones = [$telefone1];

$cliente = new Cliente(
    "545.545.343-88",
    "Evellyn",
    $telefones
);

    $contratado = new Contratado(
    "12.345.678/0001-99",
    "Empresa da Festa da Manu",
    $telefones
);

$decoracao = new Decoracao("Ursinho Pooh");

$festa = new Festa(
    "12/02/2030",
    "18/04/2030",
    6.780,
    $cliente,
    $contratado,
    $decoracao
);

