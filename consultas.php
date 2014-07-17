<?php
include_once("header.php");
include_once 'conexao.php';
$res = pg_query("select consultas.*,medico.medico from 
consultas 
join medico 
on consultas.medico_id=medico.id order by id");
?>
<table class="table">
    <thead>
        <tr>
            <th> Ordem </th>
            <th> Dias </th>
            <th> Paciente </th>
            <th> Medicos </th>

        </tr>
    </thead>
    <tbody>
        <?php while ($row = pg_fetch_object($res)) : ?>
            <tr>
                <td> <?= $row->id; ?></td>
                <td> <?= $row->dia; ?></td>
                <td> <?= $row->paciente; ?></td>
                <td> <?= $row->medico; ?></td>

                <td><a href="formineditarC.php?id=<?= $row->id; ?>&dia=<?= $row->dia; ?>&paciente=<?= $row->paciente; ?>&medico=<?= $row->medico; ?>" class="btn btn-info"> Editar</a></td>
                <td><a href="deletarC.php?id=<?= $row->id; ?>"  class="btn btn-danger"> Excluir</a></td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>
<a href="forminsertC.php" class="btn btn-primary">Inserir</a>
<?php
include_once("footer.php");
