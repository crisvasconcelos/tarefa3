<?php
include_once("header.php");
?>

<form action="editar.php" method="POST">
    <fieldset>
        <legend> Medicos</legend>
        <input type="hidden" name="id" value="<?= $_GET['id']; ?>" />
        <label> Nome:
            <input type="text" name="medico" value="<?= $_GET['medico']; ?>" />
        </label>
        <label> horario:
            <input type="text" name="horario" value="<?= $_GET['horario']; ?>" />
        </label>
        <button type="submit" class="btn btn-success"> Enviar</button>


    </fieldset>

</form>

