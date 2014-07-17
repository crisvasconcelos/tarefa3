<?php
include_once 'conexao.php';

$id = $_POST['id'];
$dia = $_POST['dia'];
$paciente = $_POST['paciente'];
$medico = $_POST['medico'];
pg_query("UPDATE consultas   SET id=$id, dia=$dia, paciente='$paciente', medico_id= $medico WHERE id = $id;");
header("location: consultas.php");
 

