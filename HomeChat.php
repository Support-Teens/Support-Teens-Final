<?php
include "conexao.php";
include "protecao_med.php"
    ?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="/public/logo.png" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="HomeChat.css">

    <title>HomeChat - Support Teens</title>
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
                    <li class="nav-item active">
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



    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 style="font-size: 48px; font-weight: 400;">Home Chat</h2>


                <img src="./public/img_kaue/Amigos.png" style="width: 60px; height: 60px;">
                <button class="Botao" style="border-radius: 5px; background-color: #A8EBF0; border: none;"
                    onclick="toggleFriendsMenu()">Amigos</button>
                <div id="friendsMenu">
                    <p>Amigo1</p>
                    <p>Amigo2</p>
                    <p>Amigo3</p>
                </div>
                <script>
                    function toggleFriendsMenu() {
                        var menu = document.getElementById("friendsMenu");
                        if (menu.style.display === "none") {
                            menu.style.display = "block";
                        } else {
                            menu.style.display = "none";
                        }
                    }
                </script>


                <img src="./public/img_kaue/Grupo.png" style="width: 50px; height: 50px;">
                <button class="Botao2" style="border-radius: 5px; background-color: #A8EBF0; border: none;"
                    onclick="toggleGroupMenu()">Grupos</button>
                <div id="groupsMenu">
                    <p>Grupo1</p>
                    <p>Grupo2</p>
                    <p>Grupo3</p>
                </div>
                <script>
                    function toggleGroupMenu() {
                        var menu = document.getElementById("groupsMenu");
                        if (menu.style.display === "none") {
                            menu.style.display = "block";
                        } else {
                            menu.style.display = "none";
                        }
                    }
                </script>

                <img src="./public/img_kaue/addGrupo.png" style="width: 60px; height: 60px;">
                <button class="Botao3" style="border-radius: 5px; background-color: #A8EBF0; border: none;"
                    style="cursor: pointer;">+Criar Grupo</button>
            </div>

            <!-- Barra de pesquisa e botão de add amigos -->
            <div class="col-md-6  d-flex flex-column align-items-left">

                <form action="search.php" method="get">
                    <input type="text" name="query" placeholder="Pesquisar amigos">
                    <button style="border-radius: 10px; border: none; color: #8E8E8E" type="submit">Pesquisar</button>
                </form>

                <?php
                // Processar a consulta e exibir os resultados
                if (isset($_GET['query'])) {
                    $search_query = $_GET['query'];

                    $usuario = 'root';
                    $senha = '';
                    $database = 'site1';
                    $host = 'localhost';

                    $mysqli = new mysqli($host, $usuario, $senha, $database);

                    if ($mysqli->error) {
                        die("Falha ao conectar ao banco de dados: " . $mysqli->error);
                    }

                    // Consultar o banco de dados
                    $sql = "SELECT * FROM users WHERE nome LIKE '%$search_query%'";
                    $result = $conn->query($sql);

                    // Exibir os resultados
                    if ($result->num_rows > 0) {
                        echo "<h3>Resultados da pesquisa:</h3>";
                        while ($row = $result->fetch_assoc()) {
                            echo "<p>{$row['nome']} - {$row['descricao']}</p>";
                        }
                    } else {
                        echo "<p>Nenhum resultado encontrado.</p>";
                    }

                    $conn->close();
                }
                ?>



                <h1 style="color: #8E8E8E; font-size: 32px; font-weight: 400; margin-top: 50px;">
                    Últimas
                    conversas</h1>


                <h1 style="font-size: 32px; font-weight: 400; margin-left: 80px; margin-top: 20px;">Chat 1</h1>
                <h1 style=" color: #8E8E8E;font-size: 16px; font-weight: 400; margin-left: 80px; margin-top: -20px;">
                    Texto</h1>
                <a href="chat.php"><img src="./public/img_kaue/Enter.png"
                        style="width: 35px; height: 35px; margin-top: -140px; margin-left: 210px;"> </a>
                <img src="./public/img_kaue/Amigo.png" style="width: 66px; height: 66px; margin-top: -105px;">
            </div>
        </div>
    </div>


    <script>
        var app = new Vue({
            el: '#app',
            data: {
                search: '',
                items: [
                    { id: 1, name: 'Amigo 1' },
                    { id: 2, name: 'Amigo 2' },
                    { id: 3, name: 'Grupo 1' },
                    { id: 4, name: 'Grupo 2' }
                ],
                filteredItems: [],
                showItems: false
            }
        });
    </script>



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
                        <td><a href="mailto:">Email</a></td>
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
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>

</body>

</php>
