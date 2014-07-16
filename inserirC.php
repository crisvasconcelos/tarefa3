<?php
include_once 'conexao.php';

$dia= $_POST['dia'];
$paciente = $_POST['paciente'];
  
if ($dia){
pg_query("INSERT INTO consultas (dia, paciente) VALUES ('$dia','$paciente');");
}
header("location: consultas.php");
