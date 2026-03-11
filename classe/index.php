<?php 

require_once "Produto.class.php";
require_once "Produto2.class.php";
$produto1 = new Produto(); // cria um objeto a partir de uma classe

//atribuindo valores para os atributos da clase produto
$produto1 -> nome = "Lápis";
$produto1 -> preco = "0.75";

    
    echo "<pre>";
    var_dump($produto1);
    echo "</pre>";

    
    //usando o construtor definido na classe
    //passando parametros por referencia( n precisa usar a sequencia )
    $produto2 = new Produto2(preco:12.50, nome: "Borracha");
    $produto3 = new Produto3("caderno", 25.50);
    //passando parametros por valor(segue a ordem de definicao)

    //Mostrar dados q estao no obejto
    echo "Objeto - Produto1 - {$produto1->nome}<br>";
    echo "Objeto - Produto2 - {$produto2->nome}<br>";

    $produto3 -> Exibir();

    $produto4 = new Produto2(preco:1.50, nome: "apontador");

    $produto4 = new Produto4 ("agenda", 50);

    echo $produto4->getNome() . "<br>";

    $produto4->setNome("agenda 2026");
    echo $produto4 -> getNome();
  

    /*echo "<pre>";
    var_dump($produto2);
    echo "</pre>";
    echo "<pre>";
    var_dump($produto3);
    echo "</pre>";*/

    
    
    
    
    
    
    
    
    
    
    
    
    ?>
