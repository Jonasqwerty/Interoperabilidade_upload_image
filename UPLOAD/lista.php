<?php

    $conexao = new pdo('sqlite:banco');
    $sql = "select * from pessoa;";
    $resultado = $conexao->query($sql)->fetchAll();
    unset($conexao);
?>
<html>
    <head>
        <meta charset="utf-8" />
    </head>
    <body>
        <p>Lista</p>
        <table border="1">
            <tr>
                <th>Id</th>
                <th>CPF</th>
                <th>Nome</th>
                <th>Image</th>
            </tr>
<?php foreach($resultado as $tupla){ ?>
            <tr>
                <td> <?php print $tupla['id']; ?></td>
                <td> <?php print $tupla['cpf']; ?></td>
                <td> <?php print $tupla['nome']; ?></td>
            </tr>
<?php   }   ?>
        </table>