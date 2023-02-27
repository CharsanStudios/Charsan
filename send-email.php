<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
  // Define o endereço de e-mail para o qual a mensagem será enviada
  $recipient = "freefiregamesjojo@gmail.com";
  
  // Coleta os dados do formulário
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];
  
  // Cria o corpo do e-mail
  $email_body = "Nome: $name\n";
  $email_body .= "E-mail: $email\n\n";
  $email_body .= "Mensagem:\n$message\n";
  
  // Define os cabeçalhos do e-mail
  $headers = "From: $email\n";
  $headers .= "Reply-To: $email\n";
  
  // Envia o e-mail
  if(mail($recipient, "Nova mensagem de $name", $email_body, $headers)) {
    echo "Mensagem enviada com sucesso!";
  } else {
    echo "Erro ao enviar mensagem. Tente novamente mais tarde.";
  }
}
?>
