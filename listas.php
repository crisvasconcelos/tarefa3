<?php
include_once("header.php");
include_once 'conexao.php';
$res = pg_query("SELECT * from medico order by id");
?>

<table class="table">
    <thead>
        <tr>
            <th> # </th>
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
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>

<?php
include_once("footer.php");