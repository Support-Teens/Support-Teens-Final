<?php

include('conexao.php');


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="login.css">
    <title>Entrar - Cadastrar</title>
</head>

<body>

<a href="#" onclick="history.back()"><i class='ico bx bx-left-arrow-alt'></i></a>

    <div class="container" id="container">
        <div class="toggle-container2">
            <div class="toggle">
               
                <div class="toggle-panel toggle-right">
                    <h1>ERRO AO LOGAR</h1>
                    <p>Clique no botão e tente novamente</p>
                    <button class="hidden"> <a style="color: white;" href="login_med.php"> Tentar Novamente </a> </button>
                </div>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
    <script src="voltar.js"></script>
</body>

</html>