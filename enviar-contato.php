<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recupera as informações do formulário
    $nomeCompleto = $_POST['nome-completo'];
    $email = $_POST['email'];
    $assunto = $_POST['assunto'];
    $mensagem = $_POST['mensagem'];
    $objetivo = $_POST['objetivo'];
    $outroObjetivo = $_POST['outro-objetivo'];
    $comoEncontrou = $_POST['como-encontrou'];
    $outroComo = $_POST['outro-como'];
    $receberAtualizacoes = isset($_POST['receber-atualizacoes']) ? $_POST['receber-atualizacoes'] : 'não';

    // Validação do formulário
    if (empty($nomeCompleto) || empty($email) || empty($assunto) || empty($mensagem)) {
        echo 'Por favor, preencha todos os campos obrigatórios.';
    } else {
        // Monta a mensagem de email
        $destinatario = 'freefiregamesjojo@gmail.com'; // Substitua pelo email da equipe responsável pelo contato
        $assuntoEmail = 'Mensagem de contato: ' . $assunto;
        $mensagemEmail = 'Nome completo: ' . $nomeCompleto . "\n\n";
        $mensagemEmail .= 'Endereço de email: ' . $email . "\n\n";
        $mensagemEmail .= 'Assunto: ' . $assunto . "\n\n";
        $mensagemEmail .= 'Mensagem: ' . $mensagem . "\n\n";
        $mensagemEmail .= 'Objetivo: ' . $objetivo . "\n\n";
        if ($objetivo == 'outro' && !empty($outroObjetivo)) {
            $mensagemEmail .= 'Outro objetivo: ' . $outroObjetivo . "\n\n";
        }
        $mensagemEmail .= 'Como nos encontrou: ' . $comoEncontrou . "\n\n";
        if ($comoEncontrou == 'outro' && !empty($outroComo)) {
            $mensagemEmail .= 'Outro como: ' . $outroComo . "\n\n";
        }
        $mensagemEmail .= 'Gostaria de receber atualizações: ' . $receberAtualizacoes;

        // Envia a mensagem de email
        $headers = 'From: ' . $email . "\r\n" .
            'Reply-To: ' . $email . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
        if (mail($destinatario, $assuntoEmail, $mensagemEmail, $headers)) {
            echo 'Sua mensagem foi enviada com sucesso.';
        } else {
            echo 'Desculpe, houve um erro ao enviar sua mensagem. Por favor, tente novamente mais tarde.';
        }
    }
}
?>
