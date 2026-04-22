<?php
require_once "Cliente.class.php";
require_once "Celular.class.php";

//instanciar um objeto cliente

$cliente = new Cliente ("maria Madalena", "111111-11", array(), 14, "999999");

$cliente->setCelular(17, "9888888");

echo"CLIENTE<br>";
ECHO "NOME: {$cliente->getNome()}<br>";
echo"CPF: {$cpf->getCpf()}<br>";
echo"CELULARES<br>";
foreach($cliente->getCelulares() as $celular){
    echo "({$celular-> getDdd()}) {$celular->getNumero()}<br>";


    //instanciar um objeto celular(q é a parte)
    $cliente2 = new Cliente("Joao da Silva", "2224346798");
    $celular = new Celular(14, "99684335", $cliente2);

    echo"CELULAR<br>";
    echo "({$celular->getDdd()}) {$celular->getNumero()}<br>";
    echo "CLIENTE<br>";
    echo "Nome:{$celular->getCliente()->getNome()}<br>";
    echo "CPF:{$celular->getCliente()->getCpf()}<br>";

}


