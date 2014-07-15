<?php
include_once 'conexao.php';

$id = $_POST['id'];
$login = $_POST['login'];
pg_query("update usuario set login= '$login' where id = $id");
header("location: listar.php");