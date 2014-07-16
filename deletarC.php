<?php
include_once 'conexao.php';

$id = $_GET['id'];
pg_query("DELETE FROM consultas WHERE id = '$id'");
header("location: consultas.php");

