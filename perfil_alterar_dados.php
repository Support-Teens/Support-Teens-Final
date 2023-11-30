<?php 
include "conexao.php";
include "restricao.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Certifique-se de validar e sanitizar os dados do formulário antes de usá-los
    $perfil_id = $_POST['id'];
    $novo_email = $_POST['email'];
    $novo_phone = $_POST['phone'];
    $novo_occupation = $_POST['occupation'];
    $novo_about = $_POST['about'];

    // Conectar ao banco de dados (substitua isso com suas configurações)
    $hostname = "localhost";
    $bancodedados = "diario";
    $usuario = "root";
    $senha = "";

    $mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
    if($mysqli->connect_errno){
        echo "falha ao conectar:(" . $mysqli->connect_errno . ")" . mysqli -> connect_errno;
    }

    // Preparar e executar a atualização da nota
    $stmt = $mysqli->prepare("UPDATE perfil SET email = ?, phone = ?, occupation = ?, about = ? WHERE id = ?");
    $stmt->bind_param("ssssi", $novo_email, $novo_phone, $novo_occupation, $novo_about, $perfil_id);

    if ($stmt->execute()) {
        // Redirecionar de volta para a página principal de exibição de notas após a atualização
        header('Location: perfil.php');
        exit;
    } else {
        echo 'Erro ao atualizar: ' . $stmt->error;
    }

    // Fechar a conexão
    $stmt->close();
    $mysqli->close();
} else {
    echo 'Acesso inválido.';
}
?>
