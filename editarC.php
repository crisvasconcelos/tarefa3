<?php
include_once 'conexao.php';

$id = $_POST['id'];
$dia = $_POST['dia'];
$paciente = $_POST['paciente'];
pg_query("update consultas set dia= '$dia', paciente= '$paciente'  where id= $id");
header("location: consultas.php");
 

