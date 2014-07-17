<?php
include_once("header.php");
include_once 'conexao.php';
$res = pg_query("select * from medico");
?>
<div class="col-md-5">
    <form class="form-horizontal" action="editarC.php" method="POST">
        <fieldset>
            <legend>Consulta</legend>
            <input type="hidden" name="id" value="<?= $_GET['id']; ?>" />
            <div class="form-group">
                <label class="col-sm-2 control-label">Data:</label>
                <div class="col-sm-10">                       
                    <input type="numeric" name="dia" value="<?= $_GET['dia']; ?>" />
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Paciente:</label>
                <div class="col-sm-10">                       
                    <input type="text" name="paciente" value="<?= $_GET['paciente']; ?>" />
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Médico:</label>
                <div class="col-sm-10">                       
                    <select name="medico">
                        <?php while ($row = pg_fetch_object($res)) : ?>
                            <option <?php if ($row->medico == $_GET['medico']) {echo 'selected';}?> value="<?php echo $row->id; ?>"><?php echo $row->medico; ?></option>
                        <?php endwhile; ?>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-success">Enviar</button>
                </div>
            </div>
        </fieldset>
    </form>
