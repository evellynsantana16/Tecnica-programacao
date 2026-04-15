<table class="table table-striped">
    <tr>
        <th>Id</th>
        <th>Descritivo</th>
    </tr>
</table>
<?php
foreach($retorno as $dado){
    echo "<tr>";
    echo "<td>{$dado->id_categoria}<?td>";
    echo "<td>{$dado->id_descritivo}<?td>";
    echo "</tr>";
}