<?php
error_reporting(0);
ini_set(“display_errors”, 0 );
session_start();


// echo "<pre>";
// print_r($_SESSION);
// echo "</pre>";

// [id] => 5
// [nome] => teste
// [tipo_usuario] => paciente

// die();

// Verifica se as variáveis de sessão estão definidas




if (!isset($_SESSION['id']) || !isset($_SESSION['nome'])) {
     header('Location: index.php');
    // Se as variáveis de sessão não estiverem definidas, redireciona para a página de login
    exit();
}




?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chat</title>
  <style>
    body {
      font-family: 'Arial', sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
    }

    #container {
      width: 100%; /* Utiliza toda a largura disponível */
      max-width: 1150px; /* Define uma largura máxima para o layout */
      display: flex;
      box-sizing: border-box;
    }

    #contacts-list {
      width: 30%;
      border-right: 1px solid #ddd;
      padding: 10px;
      overflow-y: auto;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    #chat-container {
      width: 70%;
      box-sizing: border-box;
      padding: 10px;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .retangulo {
      width: 100%;
      height: 40px;
      border-radius: 5px;
      background-color: #a2b0ed;
      display: flex;
      align-items: center;
      justify-content: center;
      color: black;
      margin-bottom: 10px;
      cursor: pointer;
    }

    #chat {
      height: 600px;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      overflow: hidden;
    }

    #chat-header {
      background-color: #a2b0ed;
      color: #fff;
      padding: 10px;
      text-align: center;
    }

    #chat-messages {
      height: 450px;
      overflow-y: auto;
      padding: 10px;
    }

    .message {
      margin-bottom: 10px;
    }

    .message p {
      padding: 8px;
      border-radius: 4px;
      max-width: 70%;
      word-wrap: break-word;
    }

    .message.sent p {
      background-color: #4CAF50;
      color: #fff;
    }

    #chat-input {
      padding: 10px;
      border-top: 1px solid #ddd;
      display: flex;
      align-items: center;
    }

    #message-input {
      flex-grow: 1;
      padding: 8px;
      border: 1px solid #ddd;
      border-radius: 4px;
    }

    #send-button {
      margin-left: 10px;
      padding: 8px;
      background-color: #9cf1ba;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

@media screen and (max-width: 1370px) {
  #container {
      width: 70%; /* Utiliza toda a largura disponível */
      height: 580px; /* Define uma largura máxima para o layout */
      
    }
    #chat {
      height: 558px;
    }

}

@media screen and (max-width: 1370px) {
  #container {
      width: 70%; /* Utiliza toda a largura disponível */
      height: 580px; /* Define uma largura máxima para o layout */
      
    }
    #chat {
      height: 558px;
    }

}

@media screen and (min-width: 350px) and (max-width: 700px) {
  #container {
  width: 100%;
  max-width: 1150px;
  display: flex;
  flex-direction: column; /* Alterado para organizar em coluna */
  box-sizing: border-box;
}

#contacts-list {
  flex-grow: 1; /* Alterado para ocupar todo o espaço disponível na nova direção (vertical) */
  border-bottom: 1px solid #ddd; /* Alterado para uma borda inferior em vez de direita */
  padding: 10px;
  background-color: #fff;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

#chat-container {
  flex-grow: 1; /* Alterado para ocupar todo o espaço disponível na nova direção (vertical) */
  box-sizing: border-box;
  padding: 10px;
  background-color: #fff;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.retangulo {
  width: 100%;
  height: 40px;
  border-radius: 5px;
  background-color: #a2b0ed;
  display: flex;
  align-items: center;
  justify-content: center;
  color: black;
  margin-bottom: 10px;
  cursor: pointer;
}

#chat {
  height: 600px;
  background-color: #fff;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  overflow: hidden;
}

#chat-header {
  background-color: #a2b0ed;
  color: #fff;
  padding: 10px;
  text-align: center;
}

#chat-messages {
  height: 450px;
  overflow-y: auto;
  padding: 10px;
}

.message {
  margin-bottom: 10px;
}

.message p {
  padding: 8px;
  border-radius: 4px;
  max-width: 70%;
  word-wrap: break-word;
}

.message.sent p {
  background-color: #4CAF50;
  color: #fff;
}

#chat-input {
  padding: 10px;
  border-top: 1px solid #ddd;
  display: flex;
  align-items: center;
}

#message-input {
  flex-grow: 1;
  padding: 8px;
  border: 1px solid #ddd;
  border-radius: 4px;
}

#send-button {
  margin-left: 10px;
  padding: 8px;
  background-color: #9cf1ba;
  color: #fff;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}


}

  </style>

</head>

<body>
  <?php 
  include "funcoes.php";

  $idto = 0;
  $id_usuario = $_SESSION['id'];
  //$id_usuario = 9;
  $contatos = pegaContatos($id_usuario);

//      echo "<pre>";
//      print_r($contatos);
//      echo "</pre>";

//  die();
?>
  <div id="container">
    <div id="contacts-list">
      <h2>Contatos</h2>
      <ul style="padding-left: 5px;">

          <?php
          foreach ($contatos as $key => $value) {

            $nome = $value[0];
             $idto = $key;
            $email = $value[1];

          ?>


            <li style="margin-top: 10px;" data-to="<?php echo $idto?>" data-from=<?php echo $id_usuario  ?>  class="pegmsg retangulo" onclick="startChat('<?php echo $nome ?>', '<?php echo $idto?>') "><?php echo $nome ?></li>
          <?php
          }


          ?>



        </ul>
      </div>

      <div id="chat-container">
      <div id="chat">
        <div id="chat-header">Chat</div>
        <div id="chat-messages"></div>
        <div id="chat-input">
          <input type="text" id="message-input" placeholder="Digite sua mensagem...">
          <button id="send-button" onclick="sendMessage()">Enviar</button>
        </div>
      </div>
    </div>
  </div>
  <script src="assets/js/jquery-3.7.1.min.js"></script>

  <script>
    function getMessages(to, from) {


      from = "<?php echo $id_usuario ?>";
      from = parseInt(from);
      $.ajax({
        type: 'POST', //qual o metodo de envio que vamos utilizar
        url: 'get_messages.php', //passar a url ao qual vamos acessar
        data: 'to=' + to + '&from=' + from, //essa e o padrao x-www-form-urlencode
        dataType: 'json', //a resposta que queremos obter
        success: dados => {


          const messagesContainer = document.getElementById('chat-messages');
          messagesContainer.innerHTML = ''; // Limpa as mensagens anteriores
          var cont = 0;

          $.each(dados, function(index, value) {

            $.each(value, function(index, msg) {

              // console.log("vendo msg")
              // console.log(msg)


              if (typeof(msg['usuario']) != undefined) {



                if (msg['usuario'] === undefined) {
                  paragraph = `<br><span style="float: left; background: #FFFFFF; padding: 5px; boder: 1px solid black; border-radius: 5px" >${msg['contato']}</span><br>`;
                  $("#chat-messages").append(paragraph);

                  cont++;



                } else {

                  paragraph = `<br><span style="float: right; background: #D1F4CC;  color: black;  padding: 5px; boder: 1px solid black; border-radius: 5px" >${msg['usuario']}</span><br>`;
                  $("#chat-messages").append(paragraph);
                  cont++;



                }



              }

            })



          })

        },
        error: erro => {
          console.log(erro)
        }


        //basico ajax
        //metodo, url, dados, sucess e erro
      })


    }






    const messagesContainer = document.getElementById('chat-messages');
    const messageInput = document.getElementById('message-input');

    function startChat(contactName, idto ) {

      to = idto

      // Limpa o conteúdo atual do chat
      // Adiciona uma mensagem de boas-vindas
      $("#chat-messages").html('');
      $("#chat-header").html('');
      $("#chat-header").html(`Bem-vindo ao chat com ${contactName}!`);
    }

    function addMessage(message, isSent) {

      paragraph = `<br><span style="float: right; background: #D1F4CC;  color: black;  padding: 5px; boder: 1px solid black; border-radius: 5px" >${message}</span><br>`;
      $("#chat-messages").append(paragraph);

     
      from = "<?php echo $id_usuario ?>";
      from = parseInt(from);
      $.ajax({
        type: 'POST', //qual o metodo de envio que vamos utilizar
        url: 'add_messages.php', //passar a url ao qual vamos acessar
        data: 'to=' + to + '&from=' + from + '&message=' + message, //essa e o padrao x-www-form-urlencode
        dataType: 'json',
        success: dados => {




        },
        error: erro => {
          console.log(erro)
        }
      });

    }

    var to = 0;
    var from = 0;



    $(document).on('click', '.pegmsg', function(){

 
       let tok =  $(this).attr('data-to');
       let fromtok = $(this).attr('data-from');
       to = tok;
       from = fromtok;
        getMessages(tok, fromtok );



    });

    function sendMessage() {
      const message = messageInput.value;
      if (message.trim() !== '') {
        addMessage(message, true);
        // Limpa o campo de entrada
        messageInput.value = '';
      }
    }


    setInterval(function() {
        getMessages(to, from);
    }, 1000);

    




  </script>
  </script>

</body>

</html>