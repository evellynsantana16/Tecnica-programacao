<?php //na herança sempre fazer o require da classe (pai) genérica
// antes das classes filhas específicas
require_once "Conta.class.php";
require_once "Corrente.class.php";
require_once "Poupança.class.php";

$conta1 = new Conta(1, "321-2", "12345-67", 2600);
/*echo "<pre>";
var_dump($conta1);
echo "<pre>";//coloca um atributo embaixo do outro*/

echo $conta1->getBanco() . "<br>";

$corrente1 = new Corrente(300,1, "345-5", "546654-77", 5100);

echo "<pre>";
var_dump($corrente1);
echo "</pre>";

echo number_format($corrente1->getSaldo(),2,",",".") . "<br>";

$corrente1->Depositar(2.50); // depositando
echo number_format($corrente1->getSaldo(),2,",",".") . "<br>"; // aqui mostra o saldo atualizado (+2.50)