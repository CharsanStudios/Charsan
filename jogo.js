// Gera um número aleatório entre 1 e 100
let numeroAleatorio = Math.floor(Math.random() * 100) + 1;

// Inicializa o número de palpites do usuário
let numeroDePalpites = 0;

// Obtém a referência para o campo de entrada e o campo de resultado
let campoPalpite = document.getElementById("palpite");
let campoResultado = document.getElementById("resultado");

function adivinhar() {
    // Obtém o palpite do usuário
    let palpite = parseInt(campoPalpite.value);
    
    // Incrementa o número de palpites do usuário
    numeroDePalpites++;

    // Verifica se o palpite do usuário está correto
    if (palpite === numeroAleatorio) {
        campoResultado.textContent = `Parabéns! Você acertou em ${numeroDePalpites} palpites!`;
    } else if (palpite < numeroAleatorio) {
        campoResultado.textContent = "Seu palpite é muito baixo, tente novamente!";
    } else {
        campoResultado.textContent = "Seu palpite é muito alto, tente novamente!";
    }
}
if (palpite === numeroAleatorio) {
    campoResultado.textContent = `Parabéns! Você acertou em ${numeroDePalpites} palpites!`;
    campoResultado.classList.add("resultado-animado");
  } else if (palpite < numeroAleatorio) {
    campoResultado.textContent = "Seu palpite é muito baixo, tente novamente!";
  } else {
    campoResultado.textContent = "Seu palpite é muito alto, tente novamente!";
  }
  let pontuacao = 0;
  if (palpite === numeroAleatorio) {
    pontuacao += numeroDePalpites;
    campoResultado.textContent = `Parabéns! Você acertou em ${numeroDePalpites} palpites! Sua pontuação é ${pontuacao}.`;
    campoResultado.classList.add("resultado-animado");
} else if (palpite < numeroAleatorio) {
    campoResultado.textContent = "Seu palpite é muito baixo, tente novamente!";
} else {
    campoResultado.textContent = "Seu palpite é muito alto, tente novamente!";
}
function novoJogo() {
    numeroAleatorio = Math.floor(Math.random() * 100) + 1;
    numeroDePalpites = 0;
    campoResultado.textContent = "";
    campoPalpite.value = "";
    pontuacao = 0;
}

function desistir() {
    campoResultado.textContent = `Sua pontuação final é ${pontuacao}.`;
    novoJogo();
}
