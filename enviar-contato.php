<?php
// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	// Obtém os valores do formulário
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$mensagem = $_POST['mensagem'];

	// Configura o destinatário e o assunto do e-mail
	$para = 'canalamigosjwc@gmail.com';
	$assunto = 'Mensagem do formulário de contato';

	// Monta o corpo da mensagem
	$mensagemCompleta = "Nome: $nome\n";
	$mensagemCompleta .= "E-mail: $email\n";
	$mensagemCompleta .= "Mensagem: $mensagem\n";

	// Configura os cabeçalhos do e-mail
	$cabecalhos = "From: $email\r\n";
	$cabecalhos .= "Reply-To: $email\r\n";

	// Envia o e-mail
	if (mail($para, $assunto, $mensagemCompleta, $cabecalhos)) {
		// E-mail enviado com sucesso
		echo 'Obrigado! Sua mensagem foi enviada com sucesso.';
	} else {
		// Erro ao enviar o e-mail
		echo 'Ocorreu um erro ao enviar sua mensagem. Por favor, tente novamente.';
	}
}
?>
