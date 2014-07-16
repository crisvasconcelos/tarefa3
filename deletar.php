<?php
include_once 'conexao.php';

$id = $_GET['id'];
pg_query("DELETE FROM medico WHERE id = '$id'");
header("location: listas.php");