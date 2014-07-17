<?php

include_once 'conexao.php';

$id = $_GET['id'];
pg_query("DELETE FROM usuario1 WHERE id = $id;");
header("location: usuario.php");

