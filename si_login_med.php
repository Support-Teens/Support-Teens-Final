<?php
include('conexao.php');

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $email = $mysqli->real_escape_string($_POST['email']);
    $senha = $mysqli->real_escape_string($_POST['senha']);

    $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND tipo_usuario = 'medico'";
    $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

    $quantidade = $sql_query->num_rows;

    if ($quantidade == 1) {
        $usuario = $sql_query->fetch_assoc();

        if (password_verify($senha, $usuario['senha'])) {
            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];
            $_SESSION['tipo_usuario'] = $usuario['tipo_usuario'];

            header("Location: home_u.php");
            exit();
        } else {
            header("Location: login_error_med.php");
            exit();
        }
    } else {
        header("Location: login_error_med.php");
        exit();
    }
}
?>
