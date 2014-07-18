<?php

include './conexao.php';

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$res = pg_query("SELECT * from usuario1");

while ($row = pg_fetch_object($res)) {
    
    if ($row->login == $usuario and $row->senha == $senha) {
        session_start();
        $_SESSION['logado'] = true;
        header("Location: index.php");
        
    } else {
        echo "<script>alert('VOCÊ ERROU A SENHA')</script>";
        echo "<script>window.location.replace('index.php')</script>";
    }
}