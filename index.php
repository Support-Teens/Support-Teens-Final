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
    <div class="form-container sign-up">
        <form action="si_cadastro.php" method="POST">
            <h1>Criar conta</h1>
            <div class="social-icons">
                <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
            </div>
            <span>ou use seu e-mail para cadastro</span>
            <input type="text" name="nome" placeholder="Nome" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="senha" placeholder="Senha" required>
            <button type="submit">Criar</button>
        </form>
    </div>
    <div class="form-container sign-in">
        <form action="si_login.php" method="POST">
            <h1>Entrar</h1>
            <div class="social-icons">
                <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
            </div>
            <span>ou use seu email e senha</span>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="senha" placeholder="Senha" required>
            <a href="recuperar_senha.php">Esqueceu sua senha?</a>
            <button type="submit">Entrar</button>
        </form>
    </div>
    <div class="toggle-container">
        <div class="toggle">
            <div class="toggle-panel toggle-left">
                <h1>Bem-vindo de volta</h1>
                <p>Volteeiiii</p>
                <button class="hidden" id="login">Entrar</button>
                <a href="login_med.php" class="hidden" style="color: white;">Sou um médico</a>
            </div>
            <div class="toggle-panel toggle-right">
                <h1>Não é registrado?</h1>
                <p>Registre-se com seus dados pessoais para usar todos os recursos do site</p>
                <button class="hidden" id="register">Cadastrar</button>
                <a href="login_med.php" class="hidden" style="color: white;">Sou um médico</a>
            </div>
        </div>
    </div>
</div>

    <script src="script.js"></script>
    <script src="voltar.js"></script>
</body>

</html>