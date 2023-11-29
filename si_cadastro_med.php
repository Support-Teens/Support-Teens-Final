<?php
include('conexao.php');

session_start();

if (isset($_SESSION['id'])) {
    header("Location: pagina_home.php");
    exit();
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nome = $mysqli->real_escape_string($_POST['nome']);
    $email = $mysqli->real_escape_string($_POST['email']);
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

   
    $query = "INSERT INTO usuarios (nome, email, senha, tipo_usuario) VALUES ('$nome', '$email', '$senha', 'medico')";
    
    if (mysqli_query($mysqli, $query)) {
        
        header("Location: cadastro_sucesso.php");
        exit();
    } else {
        
        echo "Erro ao cadastrar usuário comum: " . mysqli_error($conexao);
    }
}
?>

