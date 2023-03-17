function exibirMensagem() {
  const nome = document.getElementById('nome').value.trim();
  if (nome !== '') {
    const mensagem = `Olá ${nome}!`;
    document.getElementById('mensagem').textContent = mensagem;
    document.getElementById('formulario').style.display = 'none';

    const botoes = document.getElementsByClassName('botao');
    for (let i = 0; i < botoes.length; i++) {
      botoes[i].style.display = 'none';
    }

    document.getElementById('mensagem').style.display = 'block'; // Adicionando esta linha
  }
}
