<?php 
include "conexao.php";
include "restricao.php"
?>
<?php
    $hostname = "localhost";
    $bancodedados = "diario";
    $usuario = "root";
    $senha = "";

    $mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
    if($mysqli->connect_errno){
        echo "falha ao conectar:(" . $mysqli->connect_errno . ")" . mysqli -> connect_errno;
    }

    $sql = "SELECT date_note, hour_note, title_note, date_note FROM diario";
    $resultado = $conexao->query($sql);

    if ($resultado->num_rows > 0) {
        while ($row = $resultado->fetch_assoc()) {
            echo '<p>dados</p>';
        }
    } else {
        echo 'Nenhuma anotação encontrada.';
    }
?>