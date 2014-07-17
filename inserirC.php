<?php
include_once 'conexao.php';

$dia= $_POST['dia'];
$paciente = $_POST['paciente'];
$medico = $_POST['medico'];
  
if ($dia){
pg_query("INSERT INTO consultas (dia, paciente,medico_id) VALUES ('$dia','$paciente',$medico);");
}
header("location: consultas.php");
