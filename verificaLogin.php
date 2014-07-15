<?php

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

if ($usuario == 'cris' and $senha == 123) {
    session_start();
    $_SESSION['logado'] = true;
    header("Location: index.php");
    
}
?>