<?php 

function pegaContatos($id){

     include "conexao2.php";
     
     $query = "SELECT * FROM usuarios WHERE id <> '$id'";

     $contatos = array();
     $exec = mysqli_query($db, $query);
     while($assoc = mysqli_fetch_assoc($exec)){
        $contatos[$assoc['id']][] = $assoc['nome'];
        $contatos[$assoc['id']][] = $assoc['email'];
     }

     
    return $contatos;

}