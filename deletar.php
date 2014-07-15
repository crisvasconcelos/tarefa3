<?php
include_once 'conexao.php';

$id = $_GET['id'];
pg_query("DELETE FROM usuario WHERE id = $id");
header("location: listar.php");