<?php 

include "conexao.php";


$nome = $_POST['name'];
$email = $_POST['email'];
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);


$query = "INSERT INTO users (nome, id, senha) VALUES ('$nome', '$id', '$senha')";


$exec = mysqli_query($db, $query);

$linhas =  mysqli_affected_rows($db);

if($linhas > 0){
     header("Location: index.php?msg=ok");
     exit(); // C
}else{
    header("Location: pagefailed.php.php?msg=ok");
    exit(); // C
}








?>