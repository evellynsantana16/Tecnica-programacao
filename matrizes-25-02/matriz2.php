<?php
$matriz2 = array(
    array("nome" => "João", "p1" => 9.0, "p2" => 8.7, "t" => 4.0),
    array("nome" => "Silvia", "p1" => 8.0, "p2" => 8.1, "t" => 6.0),
    array("nome" => "Pedro", "p1" => 3.0, "p2" => 4.7, "t" => 10.0),
    array("nome" => "Tiago", "p1" => 9.0, "p2" => 5.5, "t" => 7.0),
);

foreach ($matriz2 as $aluno) {

    $media = ($aluno["p1"] + $aluno["p2"] + $aluno["t"]) / 3;

    echo "Aluno: " . $aluno["nome"] . "<br>";
    echo "Média: " . number_format($media, 2) . "<br><br>";
}

?>
