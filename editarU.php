<?php
include_once 'conexao.php';

$id = $_POST['id'];
$login = $_POST['login'];
$senha = $_POST['senha'];

pg_query("UPDATE usuario1  SET id=$id, login='$login', senha='$senha' WHERE id = $id;");
header("location: usuario.php");
