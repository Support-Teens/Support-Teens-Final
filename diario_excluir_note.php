<?php 
include "conexao.php";
include "restricao.php"
?>
<?php
if (isset($_POST['diario_excluir_note'])) {
    // Certifique-se de validar e obter o ID da nota a ser excluída
    $idNotaParaExcluir = $_POST['id_note'];

    // Conectar ao banco de dados (substitua isso com suas configurações)
    $hostname = "localhost";
    $bancodedados = "diario";
    $usuario = "root";
    $senha = "";

    $mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
    if ($mysqli->connect_errno) {
        echo "falha ao conectar:(" . $mysqli->connect_errno . ")" . mysqli -> connect_errno;
    }

    // Preparar e executar a consulta de exclusão
    $stmt = $mysqli->prepare("DELETE FROM notes WHERE id_note = ?");
    $stmt->bind_param("i", $idNotaParaExcluir);
    
    if ($stmt->execute()) {
        header('Location: home_diario.php');
        exit;
    } else {
        echo 'Erro ao excluir nota: ' . $stmt->error;
    }

    // Fechar a conexão
    $stmt->close();
    $mysqli->close();
} else {
    echo 'Ação de exclusão não acionada.';
}
?>
