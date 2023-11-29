<?php 
include "conexao2.php";

$to = $_POST['to'];
$from = $_POST['from'];
$message = $_POST['message'];
$dados['messages'] = array();
$query = "INSERT INTO messages (to_id, from_id, message ) VALUES ('$to','$from','$message')";
 //echo $query . "<br>";

$dados['status'] = 'error';

$exec = mysqli_query($db, $query);




$linhas =  mysqli_affected_rows($db);

if($linhas > 0){
    $dados['status'] = 'success';
}

echo json_encode($dados);