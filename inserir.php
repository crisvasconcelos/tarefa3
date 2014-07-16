<?php
include_once 'conexao.php';

$medico= $_POST['medico'];
$horario = $_POST['horario'];
  
if ($medico ){
pg_query("INSERT INTO medico (medico, horario) VALUES ('$medico','$horario');");
}
header("location: listas.php");
