<?php 
include "conexao2.php";

$to = $_POST['to'];
$from = $_POST['from'];

$dados = array();
$query = "SELECT * FROM messages WHERE (to_id = '$to' AND from_id = '$from') OR ( to_id = '$from' AND from_id = '$to') ORDER BY id ASC";
// echo $query . "<br>";
$cont = 0;
$exec = mysqli_query($db, $query);
while($assoc = mysqli_fetch_assoc($exec)){
       if($assoc['from_id'] == $from){
                $dados['messages'][$cont]['usuario'] = $assoc["message"];

       }else{
               $dados['messages'][$cont]['contato'] = $assoc["message"];

       }
      
    $cont++;

}


echo json_encode($dados);