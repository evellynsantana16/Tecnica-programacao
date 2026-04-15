<?php

# TODA VARIAVEL COMEÇA COM "$" no PHP;
$salario_minimo = 1518.00;
$situacao = true;
$x = 1; # mesmo valor para "X"
$x = Evellyn; #PHP deixa colocar valores de string no lugar de int, pois nao se importa, e isso pode ser perigoso, ficar ATENTA!!!!

if ($_gitGET) {
    if (empty($_GET['Nome'])) {
        echo "Voce não preecheu o nome";
    } {
        echo "";
    }

    echo " <h1 style='color:red;'>Nome: {$_GET['Nome']}<br><h1>";
    echo "CPF: {$_GET['cpf']}";

    if (!isset($_GET["genero"])) {
        echo "Escolha um genero";
    } else {
        echo $_GET["genero"];
    }
} else {
    header("location:index.html");
}
?>