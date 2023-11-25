<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./public/logo.png" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style-u.css">
    <title>Home - Support Teens</title>
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
                    <li class="nav-item active">
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



    <div class="container">
        <div class="row">
            <div class="col d-flex flex-column align-items-center">
                <div class="nome">
                    <h2 class="support">SUPPORT</h2>
                    <h1 class="teens">TEENS</h1>
                </div>
                <img class="img" src="./public/logo.png" alt="logo">
                <h3>Explore nossa página:</h3>
                <h4>Clique aqui e navegue</h4>
                <div class="d-flex justify-content-between">
                    <a href="HomeChat.php"><button class="btn_1">Chat</button></a>
                    <a href="diario.php"><button class="btn_1">Diário</button></a>
                    <a href="perfil.php"><button class="btn_1">Perfil</button></a>
                </div>
            </div>
        </div>
    </div>



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
</body>

</html>