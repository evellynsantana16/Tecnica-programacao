
<?php
// Criando um array (vetor) indexado com diferentes tipos de dados
// Índices:   0 (string), 1 (int), 2 (float), 3 (boolean)
$vetor1 = array("Carla", 20, 1.65, true);

// --- OPÇÃO 1: LAÇO FOR (O "CONTADOR") ---
// $x começa em 0; Enquanto $x for menor que 4; Aumenta $x de 1 em 1
for ($x = 0; $x < 4; $x++) {
    // Usamos as chaves {} para o PHP não se confundir ao ler a variável dentro da string
    // DICA: Se o array crescer, o número 4 aqui teria que mudar manualmente!
    echo "{$vetor1[$x]}<br>";
}

echo "<hr>"; // Apenas uma linha para separar os exemplos no navegador

// --- OPÇÃO 2: FOREACH (O "PARA CADA") ---
// É o jeito mais moderno e seguro. Ele lê o array do começo ao fim sozinho.
// "Para cada item dentro de $vetor1, chame esse item temporariamente de $dado"
foreach($vetor1 as $dado)
{
    // OBSERVAÇÃO: No PHP, o valor 'true' no echo aparece como "1" 
    // e o 'false' aparece como vazio (nada).
    echo "$dado<br>";
}

/* RESUMO PARA NÃO ESQUECER:
  1. O 'for' precisa que você diga onde parar (ex: < 4).
  2. O 'foreach' descobre sozinho o tamanho do array.
  3. Use 'foreach' sempre que quiser percorrer a lista inteira sem erro.
*/
?>