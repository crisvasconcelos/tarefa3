<?php
include_once 'conexao.php';
$res = pg_query("SELECT * from usuario order by id");
?>

<table>
    <thead>
        <tr>
            <th> Lista</th>
            <th> Login</th>
            <th> Editar</th>
            <th> Excluir</th>

        </tr>
    </thead>
    <tbody>
        <?php while ($row = pg_fetch_object($res)) : ?>
            <tr>
                <td> <?= $row->id; ?></td>
                <td> <?= $row->login; ?></td>
                <td><a href="formineditar.php?id=<?= $row->id; ?>&login=<?= $row->login;?>" > Editar</a></td>
                <td><a href="deletar.php?id=<?= $row->id; ?>" > Excluir</a></td>
            </tr>
        <?php endwhile; ?>
    </tbody>

</table>
<a href="forminsert.php">Inserir</a>
