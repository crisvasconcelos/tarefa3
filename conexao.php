<?php

$servidor   = 'localhost';
$usuario    = 'clinica';
$senha      = 'clinica';
$dbname     = 'clinica';

$conexao = pg_connect("host=$servidor user=$usuario password=$senha dbname=$dbname")
        or die('Não foi possivel conectar ');