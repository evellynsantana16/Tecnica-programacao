<?php
//matriz de coluna nomeado e de linha ordenado
$matriz2 = array(
    array("nome" => "João", "p1" => 9.0, "p2" => 8.7, "t" => 4.0),   // Índice 0
    array("nome" => "Silvia", "p1" => 8.0, "p2" => 8.1, "t" => 6.0), // Índice 1
    array("nome" => "Pedro", "p1" => 3.0, "p2" => 4.7, "t" => 10.0), // Índice 2
    array("nome" => "Tiago", "p1" => 9.0, "p2" => 5.5, "t" => 7.0),  // Índice 3
);
echo "$matriz2[0]['nome']} <br>";
foreach ($matriz2 as $vetor) {
    // O segundo foreach pega os DADOS dentro dessa linha
    foreach ($vetor as $dado) {
        echo "$dado | ";
    }
    echo "<br>";
}

?>