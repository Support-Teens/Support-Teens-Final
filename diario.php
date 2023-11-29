<?php 
include "conexao.php";
include "protecao_pac.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="icon" href="/public/svg_diario/logo.svg" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="style-diario.css">


    <title>Diário | Support Teens</title>
</head>

<body>
    <header class="fixed-header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">
                <img src="./public/svg_diario/logo.svg" alt="Logo: aperto de mãos" height="30"
                    class="d-inline-block align-top">
                Support Teens
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cadastro.php">Cadastro</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="HomeChat.php">Chat</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Descritiva.php">Descritiva</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Contato.php">Contato</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sobre.php">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="home_diario.php">Diário</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="perfil.php">Perfil</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <aside id="options">
            <div class="title">
                <h1 class="title-page">Diário</h1>
            </div>
            <div class="actions">
                <a href="home_diario.php"><button class="home"><img src="./public/svg_diario/actions-home.svg"
                            alt="Ícone de casa"></button></a>
                <a href="#"><button class="delete"><img src="./public/svg_diario/actions-delete.svg"
                            alt="Ícone de lixeira"></button></a>
                <button class="print" onclick="salvarPDF()"><img src="./public/svg_diario/actions-print.svg"
                        alt="Ícone de impressora"></button>
                <a href="#"><button class="previous"><img src="./public/svg_diario/actions-previous.svg"
                            alt="Ícone de seta para a esquerda"></button></a>
                <a href="#"><button class="next"><img src="./public/svg_diario/actions-next.svg"
                            alt="Ícone de seta para a direita"></button></a>
            </div>
            <div class="edit">
                <button><a href="#">Editar</a></button>
                <button><a href="#">Inserir</a></button>
                <button><a href="#">Tags</a></button>
                <button><a href="#">Página</a></button>
            </div>
        </aside>
        <section id="diary">
            <form action="diario_note.php" method="POST">
            <div class="date">
                <p id="dataHoje" name="date_note"></p>
                <p id="horaAtual" name="hour_note"></p>
            </div>
            <div class="toolbar">
                <button type="submit" name="save_note"><img src="./public/svg_diario/diary-toolbar-save.svg" alt="Salvar"></button>
                <button><a href="#"><img src="./public/svg_diario/diary-toolbar-undo.svg" alt="Salvar"></a></button>
                <button><a href="#"><img src="./public/svg_diario/diary-toolbar-clipboard.svg"
                            alt="Desfazer"></a></button>
                <select id="fontSelect" onchange="mudarFonte()">
                    <option value="Arial">Arial</option>
                    <option value="Montserrat">Montserrat</option>
                    <option value="Noto Sans">Noto Sans</option>
                    <option value="Times New Roman">Times New Roman</option>
                    <option value="Verdana">Verdana</option>
                </select>
                <button onclick="diminuirFonte()"><a href="#"><b>A -</b></a></button>
                <button onclick="aumentarFonte()"><a href="#"><b>A +</b></button>
                <input type="color" id="corFonte" onchange="mudarCorFonte()" value="#000000">
            </div>
            <div class="note">
                <div class="title-note">
                    <input type="text" id="title-note" name="title_note" value="<?php echo $_POST['title_note'] ?? ''; ?>" placeholder="Digite um título">
                    <div class="body-text">
                        <textarea id="editor" name="body_note" placeholder="Escreva sobre seu dia..."><?php echo $_POST['body_note'] ?? '';?></textarea>
                    </div>
                </div>
            </div>
            </form>
        </section>
    </main>
    <footer class="footer bg-dark text-light mt-4">
        <div class="container">
            <table class="footer-table">
                <tbody>
                    <tr>
                        <th>Institucional</th>
                        <th>Contate-nos</th>
                        <th>Acessibilidade</th>
                        <th>Minha conta</th>
                        <th>Privacy Policy</th>
                        <th>Siga-nos</th>
                    </tr>
                    <tr>
                        <td><a href="sobre.php">Sobre nós</a></td>
                        <td><a href="Contato.php">Email</a></td>
                    </tr>
                    <tr>
                        <td><a href="Contato.php">Trabalhe Conosco</a></td>
                        <td>Whatsapp</td>
                    </tr>
                    <tr>
                    </tr>
                </tbody>
            </table>
        </div>
    </footer>
    <div class="rectangle_footer">
        <p style="color: black;">@Copyright Support Teens 2023 -
            Todos os
            direitos
            reservados.</p>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="diario.js"></script>
</body>



</html>


