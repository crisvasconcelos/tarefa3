<?php
include_once("header.php");
?>

<form action="editarU.php" method="POST">
    <fieldset>
        <legend> Usuario</legend>
        <input type="hidden" name="id" value="<?= $_GET['id']; ?>" />
        <label> Login:
            <input type="text" name="login" value="<?= $_GET['login']; ?>" />
        </label>
        <label> Senha:
            <input type="text" name="senha" value="<?= $_GET['senha']; ?>" />
        </label>
        <button type="submit" class="btn btn-success"> Enviar</button>


    </fieldset>

</form>

