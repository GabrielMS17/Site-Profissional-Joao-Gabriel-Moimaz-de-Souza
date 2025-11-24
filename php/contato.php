<?php
// verifica se os dados do formulário foram enviados
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = isset($_POST['nome']) ? htmlspecialchars($_POST['nome']) : 'Não Informado';
    $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : 'Não Informado';
    $mensagem = isset($_POST['mensagem']) ? htmlspecialchars($_POST['mensagem']) : 'Não Informada';

// pop-up mensagem de sucesso

    echo "<!DOCTYPE html>
          <html lang=\"pt-BR\">
          <head>
              <meta charset=\"UTF-8\">
              <title>Mensagem Enviada</title>
              <script>
                  alert('Sua mensagem foi enviada com sucesso! Obrigado pelo contato, ' + '{$nome}' + '.');
                  window.location.href = 'contato.html';
              </script>
          </head>
          <body>
              <p>Sua mensagem foi enviada com sucesso. Redirecionando...</p>
          </body>
          </html>";
    exit;
}
?>