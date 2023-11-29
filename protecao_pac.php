<?php
include('conexao.php');
session_start();

if (!isset($_SESSION['id']) || empty($_SESSION['id']) || !isset($_SESSION['tipo_usuario']) || empty($_SESSION['tipo_usuario'])) {
    header("Location: prec_login.php");
    exit();
}

$tipo_usuario_permitido = "paciente"; 
if ($_SESSION['tipo_usuario'] !== $tipo_usuario_permitido) {
    echo "Você não tem permissão para acessar esta página.";
    exit();
}
?>
