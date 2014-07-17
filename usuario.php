<?php
include_once("header.php");
include_once 'conexao.php';
$res = pg_query("SELECT * FROM usuario1");
?>

<table class="table">
    <thead>
        <tr>
            <th> # </th>
            <th> Login </th>
            <th> Senha</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($row = pg_fetch_object($res)) : ?>
            <tr>
                <td> <?= $row->id; ?></td>
                <td> <?= $row->login; ?></td>
                <td> <?= $row->senha; ?></td>
                <td><a href="formineditarU.php?id=<?= $row->id; ?>&login=<?= $row->login; ?>&senha=<?= $row->senha; ?>" class="btn btn-info" > Editar</a></td>
                <td><a href="deletarU.php?id=<?= $row->id;?>" class="btn btn-danger" > Excluir</a></td>

            </tr>
        <?php endwhile; ?>
    </tbody>
</table>
<a href="forminsertU.php" class="btn btn-primary">Inserir</a>

<?php
include_once("footer.php");

