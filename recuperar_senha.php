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
        <div class="form-container sign-in2">
            <form action="si_login_med.php" method="POST">
                <h1>Recuperar senha</h1>
                <div class="social-icons">
                </div>
                <span style="padding-bottom: 10px; font-size: 15px;">Ensira seu email para enviarmos o código de autenticação.</span>
                <input type="email" name="email" placeholder="Email" required style="width: 50%;">
                <button type="submit">Enviar código</button>
            </form>
        </div>
                </div>
    <script src="script.js"></script>
    <script src="voltar.js"></script>
</body>

</html>