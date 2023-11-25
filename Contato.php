<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="/public/logo.png" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="Contato.css">


    <title>Contato - Support Teens</title>
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
                    <li class="nav-item active">
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
        <div class="rectangle_85">
            <h2 style="text-align: center;">Contate-nos</h2>

            <div style="text-align: center;">
                <img src="./public/img_kaue/location-on-map.svg" style="height: 50px; width: 50px;">
                <p>Franca - SP</p>

                <img src="./public/img_kaue/PhoneCall.png" style="height: 50px; width: 50px;">
                <p>(16) 99991-1025</p>

                <img src="./public/img_kaue/google-svgrepo-com.svg" style="height: 50px; width: 50px;">
                <p>SupportTeens@gmail.com</p>
            </div>

            <form id="app">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" id="nome" v-model="nome" class="form-control" placeholder="Nome">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" v-model="email" class="form-control" placeholder="Email">
                </div>

                <div class="form-group">
                    <label for="texto">Mensagem</label>
                    <textarea id="texto" v-model="texto" class="form-control" placeholder="Digite sua mensagem"
                        style="resize: none;"></textarea>
                </div>

                <button type="button" class="enviar" @click="enviarFormulario">
                    <img src="./public/img_kaue/icons8-enviar-90.png">
                </button>
            </form>
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



    <!-- Caixas de Texto -->

    <script>
        new Vue({
            el: '#app',
            data: {
                nome: '',
                email: '',
                texto: ''
            },
            methods: {
                enviarFormulario() {
                    console.log(this.nome);
                    console.log(this.email);
                    console.log(this.texto);
                }
            }
        })
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>


</body>

</html>