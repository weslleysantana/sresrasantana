<?php
// contato.php

// Verifica se os dados foram enviados via POST
if (isset($_POST['nome'], $_POST['email'], $_POST['mensagem'])) {
    // Sanitiza os dados enviados
    $nome = filter_var(trim($_POST['nome']), FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $mensagem = filter_var(trim($_POST['mensagem']), FILTER_SANITIZE_STRING);

    // Validação básica do e-mail
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $response = "Por favor, insira um e-mail válido.";
    } else {
        // Define o e-mail de destino e o assunto
        $to = 'contato@sresrasantana.com.br'; // Substitua pelo seu e-mail
        $subject = 'Nova mensagem do site - ' . $nome;
        
        // Monta o corpo do e-mail
        $body = "Você recebeu uma nova mensagem via formulário de contato.\n\n" .
                "Nome: $nome\n" .
                "E-mail: $email\n\n" .
                "Mensagem:\n$mensagem\n";
                
        // Define os cabeçalhos do e-mail
        $headers = "From: $email\r\n" .
                   "Reply-To: $email\r\n" .
                   "X-Mailer: PHP/" . phpversion();

        // Tenta enviar o e-mail
        if (mail($to, $subject, $body, $headers)) {
            $response = "Sua mensagem foi enviada com sucesso!";
        } else {
            $response = "Houve um problema ao enviar a mensagem. Tente novamente mais tarde.";
        }
    }
} else {
    $response = "Dados inválidos. Por favor, preencha o formulário corretamente.";
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Contato - Resultado</title>
  <link rel="stylesheet" href="css/style.css">
  <style>
    /* Estilos rápidos para a mensagem de resposta */
    body {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      background-color: #f9f9f9;
      font-family: 'Roboto', sans-serif;
    }
    .message-container {
      background: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      text-align: center;
    }
    .message-container h1 {
      margin-bottom: 20px;
      color: #007bff;
    }
    .message-container a {
      display: inline-block;
      margin-top: 20px;
      color: #007bff;
      text-decoration: none;
      font-weight: 700;
    }
  </style>
</head>
<body>
  <div class="message-container">
    <h1><?php echo $response; ?></h1>
    <a href="index.php">Voltar para a Página Principal</a>
  </div>
</body>
</html>
