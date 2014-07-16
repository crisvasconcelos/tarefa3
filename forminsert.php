<?php
include_once("header.php");
?>
<form action="inserir.php" method="POST">
    <fieldset>
        <legend> medico</legend>
        <label> nome:
            <input type="text" name="medico" />
        </label>
        <label> horario:
            <input type="text" name="horario" />
        </label>
        <button type="submit" > Enviar</button>

    </fieldset>

</form>