<?php
include_once("header.php");
?>
<form action="inserirU.php" method="POST">
    <fieldset>
        <legend> Usuario</legend>
        <label> login:
            <input type="text" name="login" />
        </label>
        <label> Senha:
            <input type="text" name="senha" />
        </label>
        <button type="submit" > Enviar</button>

    </fieldset>

</form>