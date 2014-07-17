<?php
include_once 'conexao.php';

$login= $_POST['login'];
$senha = $_POST['senha'];
  
if ($login ){
pg_query("INSERT INTO usuario1 (login,senha) VALUES ('$login','$senha');");
}
header("location: usuario.php");