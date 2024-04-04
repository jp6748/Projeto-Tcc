function validateForm() {
  var nome = document.getElementById("username").value;
  var email = document.getElementById("email").value;
  var senha = document.getElementById("password").value;


  if(nome == "" || email == "" || senha == "" ){
    alert("Preencha todos os dados!!")
    return
  }

  if (email != "fabricio@gmail.com"  ){
    alert("Esta pessoa não possui cadastro")
    return
  }
  else{
  alert("Seja bem vindo " + nome)
  window.location.href = "principal.html";
}
}
function mostrarSenha() {
  var senhaInput = document.getElementById("senha");
  if (senhaInput.type === "password") {
      senhaInput.type = "text";
  } else {
      senhaInput.type = "password";
  }
}

document.getElementById("userForm").addEventListener("submit", function(event) {
  event.preventDefault();
  const username = document.getElementById("username").value;
  const messageDiv = document.getElementById("message");

  // Aqui você pode adicionar lógica para remover o usuário
  // Como isso não é possível diretamente no navegador, vamos simular com uma mensagem
  messageDiv.textContent = `Usuário ${username} removido com sucesso.`;
  messageDiv.style.color = "green";
});
