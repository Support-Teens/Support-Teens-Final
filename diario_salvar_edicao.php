<?php 
include "conexao.php";
include "protecao_pac.php";
?>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Certifique-se de validar e sanitizar os dados do formulário antes de usá-los
    $nota_id = $_POST['id'];
    $novo_titulo = $_POST['title_note'];
    $novo_conteudo = $_POST['body_note'];

    // Preparar e executar a atualização da nota
    $stmt = $mysqli->prepare("UPDATE notes SET title_note = ?, body_note = ? WHERE id_note = ?");
    $stmt->bind_param("ssi", $novo_titulo, $novo_conteudo, $nota_id);

    if ($stmt->execute()) {
        // Redirecionar de volta para a página principal de exibição de notas após a atualização
        header('Location: home_diario.php');
        exit;
    } else {
        echo 'Erro ao atualizar a nota.';
    }

    // Fechar a conexão
    $stmt->close();
    $mysqli->close();
} else {
    echo 'Acesso inválido.';
}
?>
