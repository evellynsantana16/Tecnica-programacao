<?php
$matriz1 = array(
    array("João", 9.0, 8.7, 4.0),   // Índice 0
    array("Silvia", 8.0, 8.1, 6.0), // Índice 1
    array("Pedro", 3.0, 4.7, 10.0), // Índice 2
    array("Tiago", 9.0, 5.5, 7.0),  // Índice 3
);

echo "--- MOSTRANDO COM FOR ---<br>";

// Corrigido: $linha < 4 (pois só temos 4 alunos)
for($linha=0; $linha < 4; $linha++) {
    for($coluna=0; $coluna < 4; $coluna++) {
        echo "{$matriz1[$linha][$coluna]} | ";
    }
    echo "<br>"; // Pula linha após cada aluno
}

echo "<hr>--- MOSTRANDO COM FOREACH ---<br>";

// O segredo do Foreach na matriz:
// O primeiro foreach pega a LINHA (que é um vetor)
foreach ($matriz1 as $aluno) {
    // O segundo foreach pega os DADOS dentro dessa linha
    foreach ($aluno as $dado) {
        echo "$dado | ";
    }
    echo "<br>";
}
?>