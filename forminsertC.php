<?php
include_once("header.php");
?>
<form action="inserirC.php" method="POST">
    <fieldset>
        <legend> Consultas</legend>
        <label> Dias:
            <input type="numeric" name="dia" />
        </label>
        <label> Paciente:
            <input type="text" name="paciente" />
        </label>
        <button type="submit" > Enviar</button>

    </fieldset>

</form>