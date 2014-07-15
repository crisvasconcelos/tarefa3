<?php
include_once 'conexao.php';

$login= $_POST['login'];
  
if ($login ){
pg_query("INSERT INTO usuario (login) VALUES ('$login');");
}
header("location: listar.php");
