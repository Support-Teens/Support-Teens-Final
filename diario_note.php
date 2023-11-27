<?php

    $hostname = "localhost";
    $bancodedados = "diario";
    $usuario = "root";
    $senha = "";

    $mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
    if($mysqli->connect_errno){
        echo "falha ao conectar:(" . $mysqli->connect_errno . ")" . mysqli -> connect_errno;
    }
    else{
        echo "Conectado ao Banco de dados";
    }
    date_default_timezone_set('America/Sao_Paulo');
    //$date_note = isset($_POST["date_note"]) ? $_POST["date_note"] : "";
    $date_note = date('Y-m-d');
    //$hour_note = isset($_POST["hour_note"]) ? $_POST["hour_note"] : "";
    $hour_note = date('H:i:s');
    $title_note = isset($_POST["title_note"]) ? $_POST["title_note"] : "";
    $body_note = isset($_POST["body_note"]) ? $_POST["body_note"] : "";
    

    $sql = "insert into notes (date_note, hour_note, title_note, body_note) values ('$date_note', '$hour_note', '$title_note', '$body_note')";

    $resultado = $mysqli->query($sql) or trigger_error($mysqli->error);

    if($resultado==false){
        echo "erro ao salvar nota";
    }//else{
//     echo "nota salva com sucesso";

    $mysqli->close();
    header('Location: home_diario.php');
    exit;
?> 