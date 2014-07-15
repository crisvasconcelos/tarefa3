<?php
include_once 'conexao.php';

$id = $_POST['id'];
$medico = $_POST['medico'];
$horario = $_POST['horario'];
pg_query("update medico set medico= '$medico', horario= '$horario'  where id= $id");
header("location: listas.php");