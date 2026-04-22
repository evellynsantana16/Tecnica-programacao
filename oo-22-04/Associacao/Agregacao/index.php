<?php
require_once "Produto.class.php";
require_once "Categoria.class.php";

// criando categorias
$categoria1 = new Categoria("Material Escolar");
$categoria2 = new Categoria("Material Escritório");

// criando produto com categorias
$produto1 = new Produto("Caneta", 2.50, array($categoria1, $categoria2));

// criando outra categoria e substituindo
$categoria3 = new Categoria("Material de desenho");
$produto1->setCategorias(array($categoria3));

// criando outro produto
$produto2 = new Produto("Caderno", 20.00, array($categoria1));

// MOSTRAR DADOS
echo "PRODUTO<br><br>";

echo "Nome: {$produto2->getNome()}<br>";
echo "Preço: R$ " . number_format($produto2->getPreco(), 2, ",", ".") . "<br>";

echo "<br>CATEGORIAS DO PRODUTO:<br>";

foreach($produto1->getCategorias() as $categoria){
    echo "- {$categoria->getNome()}<br>";
}