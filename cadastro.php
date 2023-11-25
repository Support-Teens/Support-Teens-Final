<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="/public/svg_diario/logo.svg" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - Support Teens</title>
    <link rel="stylesheet" href="cadastro.css">
</head>

<body>

    <img class="quadro" src="./public/cadastro.svg" alt="cadastro">
    <a href="index.php" style="position: absolute;">
        <img src="./public/arrow.png" class="mb-2" width="40px">
    </a>
    <div class="form">
        <form action="">
            <h3>Seja bem vindo(a)</h3>
            <h1>Cadastro</h1>
            <a id="google" href="">
                <div class="googl"><img class="goog" src="./public/google.svg" alt="">
                    <h3 class="gg">Entrar com Google</h3>
                </div>
            </a>
            <img class="ou" src="./public/divider-label.svg" alt="ou">
            <input id="model" type="text" placeholder="Nome do Usuário">
            <input id="model" type="date" placeholder="Data de nascimento">
            <input id="model" type="email" placeholder="E-mail">
            <input id="model" type="tel" placeholder="telefone" autocomplete="off" maxlength="16">
            <input id="model" type="password" placeholder="Senha">
            <input id="model" type="password" placeholder="Confirme sua Senha">
            <a id="cadastro" href="">
                <h3 class="cad">Cadastrar-se</h3>
            </a>
            <a href="login.php" style="text-decoration: none;">já sou cadastrado</a>
        </form>
    </div>
</body>

</html>