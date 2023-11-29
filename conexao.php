<?php

$usuario = 'dese0964_site1';
$senha = 'si@171156;
$database = 'dese0964_site1';
$host = 'localhost';

$mysqli = new mysqli($host, $usuario, $senha, $database);

if($mysqli->error) {
    die("Falha ao conectar ao banco de dados: " . $mysqli->error);
}
