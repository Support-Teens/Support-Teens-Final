<?php 
include "conexao.php";
include "protecao_pac.php";
?>
<?php
if (isset($_POST['diario_excluir_note'])) {
    // Certifique-se de validar e obter o ID da nota a ser excluída
    $idNotaParaExcluir = $_POST['id_note'];

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
