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

  const image = document.querySelector("img"[1]),
    input = document.querySelector("input");

  input.addEventListener("change", () => {
    image.src = URL.createObjectURL(input.files[0]);
  });

  const password = 'casjonata'; // defina sua senha aqui
const redirectUrl = 'adms.html'; // defina a URL de redirecionamento aqui

const form = document.querySelector('#login-form');
form.addEventListener('submit', function(event) {
  event.preventDefault();
  const passwordInput = document.querySelector('#password-input');
  const enteredPassword = passwordInput.value;
  if (enteredPassword === password) {
    window.location.href = redirectUrl;
  } else {
    passwordInput.value = '';
    alert('Senha incorreta. Tente novamente.');
  }
});

