<?php
include "conexao.php";
include "restricao.php"
    ?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="/public/logo.png" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="Descritiva.css">

    <title>Descritiva - Support Teens</title>
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
                    <li class="nav-item active">
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
        <h2 style="text-align: center; font-size:60px; margin-bottom: 30px;">Descrição de cada
            transtorno</h2>

        <div class="rectangle_info">
            <h2 style="text-align: center;">Depressão</h2>
            <div class="rectangle_text">
                <h1 style="font-size: 24px; font-weight: 400; text-align: justify;">"A depressão é considerada pela
                    Organização Mundial da Saúde (OMS) como o "Mal do Século". No sentido patológico, há presença de
                    tristeza, pessimismo, baixa auto-estima, que aparecem com freqüência e podem
                    combinar-se entre si. A depressão provoca ainda ausência de prazer em coisas que antes faziam bem e
                    grande oscilação de humor e pensamentos, que podem culminar em comportamentos e atos suicidas. O
                    tratamento é feito com auxílio médico profissional, por meio de medicamentos, e acompanhamento
                    terapêutico conforme cada caso. O apoio da família é fundamental. Está presente na literatura médica
                    e
                    científica mundial que a depressão também incita alterações fisiológicas no corpo, sendo porta de
                    entrada para outras doenças. A depressão, dependendo da gravidade, pode desencadear, também, doenças
                    cardiodasculares."</h1>
            </div>
        </div>

        <div class="rectangle_info">
            <h2 style="text-align: center;">Ansiedade</h2>
            <div class="rectangle_text">
                <h1 style="font-size: 24px; font-weight: 400; text-align: justify;">"O que é ansiedade? O termo tem
                    várias
                    definições nos dicionários não técnicos: aflição, angústia, perturbação do espírito
                    causada pela incerteza, relação com qualquer contexto de perigo, etc. Levando-se em conta o aspecto
                    técnico, devemos entender ansiedade como um fenômeno que ora nos beneficia
                    ora nos prejudica, dependendo das circunstâncias ou intensidade, podendo tornar-se patológica, isto
                    é,
                    prejudicial ao nosso funcionamento psíquico (mental) e somático (corporal). A ansiedade estimula o
                    indivíduo a entrar em ação, porém, em excesso, faz exatamente o contrário,
                    impedindo reações. Os transtornos de ansiedade são doenças relacionadas ao funcionamento do corpo e
                    às
                    experiências de vida. Pode-se sentir ansioso a maior parte do tempo sem nenhuma razão aparente;
                    pode-se
                    ter ansiedade às vezes, mas tão intensamente que a pessoa se sentirá imobilizada."</h1>
            </div>
        </div>

        <div class="rectangle_info">
            <h2 style="text-align: center;">TDAH</h2>
            <div class="rectangle_text">
                <h1 style="font-size: 24px; font-weight: 400; text-align: justify;">"O que é o TDAH?
                    O Transtorno do Déficit de Atenção com Hiperatividade (TDAH) é um transtorno neurobiológico, de
                    causas
                    genéticas, que aparece na infância e freqüentemente acompanha o indivíduo por toda a sua vida. Ele
                    se
                    caracteriza por sintomas de desatenção, inquietude e impulsividade. Ele é chamado às vezes de DDA
                    (Distúrbio do Déficit de Atenção). Em inglês, também é chamado de ADD, ADHD ou de AD/HD.Existe mesmo
                    o
                    TDAH? Ele é reconhecido oficialmente por vários países e pela Organização Mundial da Saúde (OMS). Em
                    alguns países, como nos Estados Unidos, portadores de TDAH são protegidos pela lei quanto a
                    receberem
                    tratamento diferenciado na escola. Não existe controvérsia sobre a existência do TDAH?
                    Não, nenhuma. Existe inclusive um Consenso Internacional a este respeito."</h1>
            </div>
        </div>

        <div class="rectangle_info">
            <h2 style="text-align: center;"> Bulimia</h2>
            <div class="rectangle_text">
                <h1 style="font-size: 24px; font-weight: 400; text-align: justify;">"A bulimia nervosa, ou apenas
                    bulimia, é
                    um distúrbio alimentar grave, que pode causar muitos danos a saúde. A bulimia se caracteriza por
                    episódio de consumo excessivo de alimentos seguida por um comportamento compensatório, em virtude da
                    culpa e medo do ganho de peso, de indução de vômitos e/ou diarreia. Os distúrbios alimentares são
                    desordens psiquiátricas que envolvem a capacidade de percepção corporal e precisam de diagnóstico
                    precoce e tratamento intensivo para minimizar seus riscos. O maior de todos os riscos, especialmente
                    na
                    bulimia e vigorexia (excesso de atividade física), é a demora no diagnóstico, pois, o emagrecimento
                    pode
                    não ser tão evidente como na anorexia. Essa condição é mais propensa a afetar a saúde da mulher e
                    pessoas com fragilidade emocional, como, por exemplo, aquelas que tomam remédio para ansiedade e
                    depressão."</h1>
            </div>
        </div>

        <div class="rectangle_info">
            <h2 style="text-align: center;"> Fobia Social</h2>
            <div class="rectangle_text">
                <h1 style="font-size: 24px; font-weight: 400; text-align: justify;">"A fobia social é a incapacidade de
                    lidar com situações de interações sociais com desconhecidos ou em lugares que coloquem a pessoa em
                    evidência, gerando um extremo desconforto e nervosismo, fazendo com que ela se sinta vulnerável e
                    evite
                    essas situações a qualquer custo. Por que isso acontece? Quem possui fobia social age dessa forma,
                    porque acredita que está sendo analisada o tempo inteiro e julgada pelas suas palavras,
                    comportamento e
                    atitudes. Quais os sintomas da fobia social? Os sintomas da fobia social são formados por um
                    conjunto de
                    sensações emocionais e físicas que a pessoa pode sentir, além da externalização do comportamento em
                    virtude desse transtorno. Às vezes, os sintomas da fobia social podem ser confundidos com as
                    características da personalidade de uma pessoa tímida, mas suas consequências são muito mais
                    graves."
                </h1>
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
                        <td><a href="sobre.html">Sobre nós</a></td>
                        <td><a href="mailto:">Email</a></td>
                    </tr>
                    <tr>
                        <td><a href="Contato.html">Trabalhe Conosco</a></td>
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

    <!-- Aviso: -->

    <div id="app">
        <div v-if="showWarning" class="warning-container">
            <div class="warning-content">
                <h1>AVISO: Esta página pode conter conteúdo que pode ser considerado gatilho para algumas pessoas.
                </h1>
                <button @click="hideWarning">Entendi</button>
            </div>
        </div>

    </div>

    <script>
        new Vue({
            el: '#app',
            data: {
                showWarning: true
            },
            methods: {
                hideWarning() {
                    this.showWarning = false;
                }
            }
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>