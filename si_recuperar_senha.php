<?php
include('conexao.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (isset($_POST['recuperar_senha'])) {

        $email = $mysqli->real_escape_string($_POST['email']);

        $sql_code = "SELECT id, nome FROM usuarios WHERE email = '$email' AND tipo_usuario = 'medico'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);
        $quantidade = $sql_query->num_rows;

        if ($quantidade == 1) {
            $usuario = $sql_query->fetch_assoc();

            $codigo_recuperacao = bin2hex(random_bytes(32));

            $sql_code = "UPDATE usuarios SET codigo_recuperacao = '$codigo_recuperacao' WHERE id = " . $usuario['id'];
            $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

            $assunto = "Recuperação de Senha";
            $mensagem = "Olá " . $usuario['nome'] . ",\n\nVocê solicitou a recuperação de senha.\n\nCódigo de Recuperação: " . $codigo_recuperacao;
            $headers = "From: seu_email@example.com";

            mail($email, $assunto, $mensagem, $headers);

            // Mostra o alerta antes do redirecionamento
            echo "<script>alert('Recuperação de senha bem-sucedida!');</script>";
            
            header("Location: login.php?recuperacao_sucesso=1");
            exit();
        } else {
            // Mostra o alerta antes do redirecionamento
            echo "<script>alert('Erro ao recuperar senha. Verifique se o e-mail está correto ou entre em contato com o suporte.');</script>";
            
            header("Location: login.php?recuperacao_erro=1");
            exit();
        }
    }
}
?>
