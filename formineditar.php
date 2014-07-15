<form action="editar.php" method="POST">
    <fieldset>
        <legend> Cadastro de login de usuário</legend>
        <input type="hidden" name="id" value="<?= $_GET['id'];?>" />
        <label> login:
            <input type="text" name="login" value="<?= $_GET['login'];?>" />
        </label>
        <button type="submit" > Enviar</button>
            
    </fieldset>
        
</form>

