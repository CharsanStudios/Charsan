<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  $to = "canalamigosjwc@gmail.com";
  $subject = "Formulário de Contato";
  $body = "Nome: $name\nE-mail: $email\nMensagem:\n$message";

  if (mail($to, $subject, $body)) {
    echo "<p class='success'>Sua mensagem foi enviada com sucesso!</p>";
  } else {
    echo "<p class='error'>Houve um problema ao enviar a sua mensagem. Por favor, tente novamente.</p>";
  }
}
?>
