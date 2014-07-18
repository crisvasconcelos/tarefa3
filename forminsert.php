<?php
include_once("header.php");
?>
<form action="inserir.php" method="POST">
    <fieldset>
        <legend> Médicos: </legend>
        <label> Nome:
            <input type="text" name="medico" />
        </label><br><br>
        <label> Horario:
            <input type="text" name="horario" />
        </label><br><br>
        <button type="submit"class="btn btn-success" > Enviar</button>

    </fieldset>

</form>