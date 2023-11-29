<?php 
include "conexao.php";
include "protecao_pac.php";
?>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['data'])) {
    // Certifique-se de validar e sanitizar a data de pesquisa
    $dataSelecionada = $_GET['data'];

    // Preparar e executar a consulta de filtragem por data
    $stmt = $mysqli->prepare("SELECT id_note, date_note, hour_note, title_note, body_note FROM notes WHERE date_note = ? ORDER BY hour_note DESC");
    $stmt->bind_param("s", $dataSelecionada);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows > 0) {
        while ($row = $resultado->fetch_assoc()) {
            echo '<a href="diario_editar_note.php?id=' . $row['id_note'] . '">';
                echo '<div class="note">';
                    echo '<div class="date-hour">';
                        echo '<p class="date-note">' . $row['date_note']. '</p>';
                        echo '<p class="hour-note">' . $row['hour_note']. '</p>';
                    echo '</div>';
                    echo '<h3 class="title-note">'. $row['title_note'] . '</h3>';
                    echo '<div class="note-content">'. $row['body_note'] . '</div>';
                echo '</div>';
            echo '</a>';
        }
    } else {
        echo 'Nenhuma anotação encontrada para a data selecionada.';
    }

    // Fechar a conexão
    $stmt->close();
    $mysqli->close();
} else {
    echo 'Acesso inválido.';
}
?>
