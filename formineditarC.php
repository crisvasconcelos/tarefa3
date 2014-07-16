<?php
include_once("header.php");
?>

<form action="editarC.php" method="POST">
    <fieldset>
        <legend> Consultas</legend>
        <input type="hidden" name="id" value="<?= $_GET['id']; ?>" />
        <label> Data:
            <input type="numeric" name="dia" value="<?= $_GET['dia']; ?>" />
        </label>
        <label> Paciente:
            <input type="text" name="paciente" value="<?= $_GET['paciente']; ?>" />
        </label>
        <button type="submit" class="btn btn-success"> Enviar</button>


    </fieldset>

</form>

