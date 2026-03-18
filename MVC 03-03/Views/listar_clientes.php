<!doctype html>
<html>
    <head>
        <title>Lista de Clientes</title>
        <meta charset = UTF-8>
    </head>
<body>
    <h1>Clientes</h1>
    <table border = "1">
    
    <tr>
        <th>NOME</th>
        <th>CPF</th>
        <th>EMAIL</th>
    </tr>

        <?php
        foreach($retorno as $dado){
            echo "<tr>";
            echo "<td>{$dado[0]}</td>";
            echo "<td>{$dado[1]}</td>";
            echo "<td>{$dado[2]}</td>";
            echo "</tr>";
        }
        ?>

    </table>

    
</body>

    </html>