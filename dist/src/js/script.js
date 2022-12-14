const inputs = document.querySelectorAll('.input');
const button = document.querySelector('.login__button');

const handleFocus = ({ target }) => {
  const span = target.previousElementSibling;
  span.classList.add('span-active');
}

const handleFocusOut = ({ target }) => {
  if (target.value === '') {
    const span = target.previousElementSibling;
    span.classList.remove('span-active');
  }
}

inputs.forEach((input) => input.addEventListener('focus', handleFocus));
inputs.forEach((input) => input.addEventListener('focusout', handleFocusOut));

// Verificação dos Campos no Cadastro/Login nos arquivos index.php e login.php
function btnFunction() {
  var username = document.getElementById("username").value;
  var email = document.getElementById("email").value;
  var password = document.getElementById("password").value;
  var confirmPassword = document.getElementById("confirmPassword").value;

  if ((username == "") || (email == "") || (password == "") || (confirmPassword == "")) {
    alert("ERROR! - Campos Vazios");
  } else if (email.search("@") == -1) {
    alert("ERROR! - E-mail inválido_Verifique se há '@'");
  } else if (username.value.lenght < 4) {
    alert("ERROR! - Username deve ter 4 ou mais caracteres");
  } else if (password != confirmPassword) {
    alert("ERROR! - Senha e Confirmação da Senha devem ser iguais");
  }
}

// Mostrar Senha nas páginas de Login/Cadastro nos arquivos index.php e login.php
function Mostrar() {
  var password = document.getElementById("password");
  var confirmPassword = document.getElementById("confirmPassword");

  let inputTypeIsPassword = password.type == "password";
  let inputTypeIsPassword2 = confirmPassword.type == "password";
  if ((inputTypeIsPassword) && (inputTypeIsPassword2)) {
    showPassword();
  } else {
    hidePassword();
  }
}

function MostrarLogin() {
  var password = document.getElementById("password");

  let inputTypeIsPassword = password.type == "password";
  if (inputTypeIsPassword) {
    showPassword();
  } else {
    hidePassword();
  }
}

function showPassword() {
  password.setAttribute("type", "text");
  confirmPassword.setAttribute("type", "text");
}

function hidePassword() {
  password.setAttribute("type", "password");
  confirmPassword.setAttribute("type", "password");
} 