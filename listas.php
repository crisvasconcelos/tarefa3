<?php
include_once("header.php");
include_once 'conexao.php';
$res = pg_query("SELECT * from medico order by id");
?>

<table class="table">
    <thead>
        <tr>
            <th> Lista </th>
            <th> Médicos </th>
            <th> Horários</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($row = pg_fetch_object($res)) : ?>
            <tr>
                <td> <?= $row->id; ?></td>
                <td> <?= $row->medico; ?></td>
                <td> <?= $row->horario; ?></td>
                <td><a href="formineditar.php?id=<?= $row->id; ?>&medico=<?= $row->medico; ?>&horario=<?= $row->horario; ?>" class="btn btn-info" > Editar</a></td>
                <td><a href="deletar.php?id=<?= $row->id; ?>" > Excluir</a></td>

            </tr>
        <?php endwhile; ?>
    </tbody>
</table>
<a href="forminsert.php" class="btn btn-primary">Inserir</a>

<?php

include_once("footer.php");
