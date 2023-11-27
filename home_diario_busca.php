<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['termo'])) {
    // Certifique-se de validar e sanitizar o termo de pesquisa
    $termoPesquisa = $_GET['termo'];

    // Conectar ao banco de dados (substitua isso com suas configurações)
    $hostname = "localhost";
    $bancodedados = "diario";
    $usuario = "root";
    $senha = "";

    $mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
    if($mysqli->connect_errno){
        echo "falha ao conectar:(" . $mysqli->connect_errno . ")" . mysqli -> connect_errno;
    }

    // Preparar e executar a consulta de pesquisa
    $stmt = $mysqli->prepare("SELECT id_note, date_note, hour_note, title_note, body_note FROM notes WHERE title_note LIKE ? OR body_note LIKE ? ORDER BY hour_note DESC");
    $termoPesquisaLike = "%{$termoPesquisa}%";
    $stmt->bind_param("ss", $termoPesquisaLike, $termoPesquisaLike);
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
        echo 'Nenhuma anotação encontrada.';
    }

    // Fechar a conexão
    $stmt->close();
    $mysqli->close();
} else {
    echo 'Acesso inválido.';
}
?>