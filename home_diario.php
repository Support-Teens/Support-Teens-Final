<?php 
include "conexao.php";
include "restricao.php"
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="icon" href="/public/svg_diario/logo.svg" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Home Diário | Support Teens</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style-home-diario.css">
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
                    <li class="nav-item active">
                        <a class="nav-link" href="home_diario.php">Diário</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="perfil.php">Perfil</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main class="main">
        <aside>
            <div class="title">
                <h1 class="title-page">Diário</h1>
                <h2 class="name-user">Nome Sobrenome</h2>
            </div>
            <div id="options">
                <div class="search">
                    <label for="search"><img src="./public/svg_diario/options-search.svg">Busca</label>
                    <input type="search" class="search-input" placeholder="Digite o que está procurando">
                </div>

                <div class="files">
                    <div><img src="./public/svg_diario/options-folder.svg">Pastas</div>
                    <p style="font-size: 0.8rem; padding-top: 0.5rem">Em breve...</p><br>
                    <!--<button><a href="#"><img src="./public/svg_diario/options-folder-arrow-right.svg">Pasta
                            1<a></button>
                    <button><a href="#"><img src="./public/svg_diario/options-folder-arrow-right.svg">Pasta
                            2<a></button>
                    <button><a href="#"><img src="./public/svg_diario/options-folder-arrow-right.svg">Pasta
                            3<a></button>-->

                </div>
                <div class="tags">
                    <div class="tags-title"><img src="./public/svg_diario/options-tag.svg">Tags</div>
                    <div class="tags-button">
                        <p style="font-size: 0.8rem; padding-top: 0.5rem">Em breve...</p><br>
                        <!--<button><a href="#">Tag 1<a></button>
                        <button><a href="#">Tag 2<a></button>
                        <button><a href="#">Tag 3<a></button>
                        <button><a href="#">Tag 4<a></button>-->
                    </div>
                </div>
                <div class="calendar">
                    <div><img src="./public/svg_diario/options-calendar.svg">Calendário</div>
                    <label for="data">Selecione uma data:</label><br>
                    <input type="date" id="data" name="data">
                    <button onclick="filtrarPorData()">Filtrar</button>
                    <!-- Seu conteúdo a ser filtrado aqui -->
                    <div id="conteudo">
                        <!-- Anotações e outros elementos -->
                    </div>
                </div>
            </div>
        </aside>
        <section id="notes">
            <div class="notes-actions">
                <div class="way">
                    <button><a href="#"><img src="./public/svg_diario/way-return.svg"><a></button>
                    <button><a href="#">Pasta <a></button>
                    <button><a href="#">Subpasta<a></button>
                </div>
                <div class="new-note">
                    <a href="diario.php"><button class="new-note-button"><img
                                src="./public/svg_diario/notes-new-note.svg" alt="Nova anotação"></button></a>
                </div>
            </div>
            <div class="button-file">
                <button><a href="#"><img src="./public/svg_diario/content-folder.svg"><a></button>
            </div>
            <div class="all-notes">
                <?php
                    $hostname = "localhost";
                    $bancodedados = "diario";
                    $usuario = "root";
                    $senha = "";

                    $mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
                    if($mysqli->connect_errno){
                        echo "falha ao conectar:(" . $mysqli->connect_errno . ")" . mysqli -> connect_errno;
                    }
                    $sql = "SELECT id_note, date_note, hour_note, title_note, body_note FROM notes order by hour_note DESC";
                    $resultado = $mysqli->query($sql);

                    if ($resultado->num_rows > 0) {
                        while ($row = $resultado->fetch_assoc()) {
                            echo '<a href="diario_editar_note.php?id=' . $row['id_note'] . '">';
                                echo '<div class="note">';
                                    echo '<div class="date-hour">';
                                        echo '<p class="date-note">' . $row['date_note']. '</p>';
                                        echo '<p class="hour-note">' . $row['hour_note']. '</p>';
                                    echo '</div>';
                                    echo '<h3 class="title-note">'. $row['title_note'] . '</h3>';
                                    echo '<div class="note-content">'. $row['body_note'] . '</div>';
                                echo '</div>';
                            echo '</a>';
                    }} else {
                        echo 'Nenhuma anotação encontrada.';
                    }
                ?>
            </div>
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
    <script src="home_diario.js"></script>
</body>

</html>

