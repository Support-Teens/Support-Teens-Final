<?php 
include "conexao.php";
include "restricao.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style-perfil.css">
    <title>Perfil - Support Teens</title>
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
                    <li class="nav-item active">
                        <a class="nav-link" href="perfil.php">Perfil</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>



    <div class="container">
        <div class="row">
            <div class="col-md-6 d-flex flex-column align-items-left">
                <h1>Deseja alterar dados?</h1>
                <form action="perfil_alterar_dados.php" method="POST">    
                <div class="textfield">
                    <?php
                        $hostname = "localhost";
                        $bancodedados = "diario";
                        $usuario = "root";
                        $senha = "";

                        $mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
                        if($mysqli->connect_errno){
                            echo "falha ao conectar:(" . $mysqli->connect_errno . ")" . mysqli -> connect_errno;
                        }
                        $sql = "SELECT email, phone, occupation, about FROM perfil";
                        $resultado = $mysqli->query($sql);

                        if ($resultado) {
                            $row = $resultado->fetch_assoc();
                        }
                        ?>
                                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

                            <label for="email">E-mail</label><br>
                            <input name="email" type="text" placeholder="exemplo@gmail.com" id="email" required 
                            value="<?php echo $row['email'];                   
                            ?>">
                    </div><br>
                    <div class="textfield">
                            <label for="phone">Telefone</label><br>
                            <input name="phone" type="text" placeholder="(XX) XXXXX-XXXX" id="phone" required
                            value="<?php echo $row['phone'];                   
                            ?>">
                    </div><br>
                    <div class="textfield">
                            <label for="occupation">Profissão</label><br>
                            <input name="occupation" type="text" placeholder="Ex: Estudante" id="occupation" required
                            value="<?php echo $row['occupation'];                   
                            ?>">
                    </div><br>
                    <div class="textfield">
                      
                            <label for="about">Sobre você</label><br>
                            <textarea style="resize: none;" name="about" type="" placeholder="Escreva algo sobre você"
                                id="about"><?php echo $row['about']; ?></textarea>
                        
                    </div><br>
                    <input type="submit" name="send" value="enviar" id="send">
                    </div>
                </form>
            <div class="col-md-6 d-flex flex-column align-items-center">
                <section class="perfil">
                    <div class="avatar">
                        <img src="./public/src/perfil-avatar.svg" alt="Foto de perfil">
                    </div>
                    <div class="data-user">
                        <div class="data-user-backgroud"></div>
                        <div class="data-user-backgroud"></div>
                        <div class="data-user-backgroud"></div>
                        <div class="data-user-backgroud"></div>
                        <div class="data-user-backgroud"></div>
                    </div>
                </section>
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
