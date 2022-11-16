const form = document.getElementById("form");
const formnome = document.getElementById("form-nome");
const formcpf = document.getElementById("form-cpf");
const formfone = document.getElementById("form-fone");
const formsenha = document.getElementById("form-senha");
const formsenhaconf = document.getElementById("form-senhaconf");
const nome = document.getElementById("nome");
const cpf = document.getElementById("cpf");
const fone = document.getElementById("fone");
const senha = document.getElementById("senha");
const senhaconf = document.getElementById("senhaconf");


formnome.addEventListener("focusout", (e) => {
  
  checkInputsUsername();  
});

formcpf.addEventListener("focusout", (e) => {
  checkInputsSenha
  checkInputsCpf();
});

formfone.addEventListener("focusout", (e) => {
  
  checkInputsFone();
});

formsenha.addEventListener("focusout", (e) => {
  
  checkInputsSenha();
});

formsenhaconf.addEventListener("focusout", (e) => {
  
  checkInputsSenhaConf();
});

form.addEventListener('submit', (e) =>{
  checkInputs();
  if(checkInputs()==false){
    e.preventDefault();
  }
});



function checkInputs(){
  const nomeValue = nome.value;
  const cpfValue = cpf.value;
  const foneValue = fone.value;
  const senhaValue = senha.value;
  const senhaconfValue = senhaconf.value;
  flagnome = false;
  flagcpf = false;
  flagfone = false;
  flagsenha = false;
  flagsenhaconf = false;

  if (nomeValue === ""){
    setErrorFor(nome, "O nome do usuário é obrigatório");    
  }else{
    setSuccessFor(nome);
    flagnome = true;
  }

  if (cpfValue === "") {
    setErrorFor(cpf, "O CPF é obrigatório.");    
  } else if (!testaCPF(cpfValue)) {
    setErrorFor(cpf, "Por favor, insira um CPF válido.");    
  } else {
    setSuccessFor(cpf);
    flagcpf = true;
  }

  if (foneValue === ""){
    setErrorFor(fone, "O telefone do usuário é obrigatório");    
  }else{
    setSuccessFor(fone);
    flagfone = true;
  }

  if (senhaValue === "") {
    setErrorFor(senha, "A senha é obrigatória.");    
  } else if (senhaValue.length < 7) {
    setErrorFor(senha, "A senha precisa ter no mínimo 7 caracteres.");    
  } else {
    setSuccessFor(senha);
    flagsenha = true;
  }

  if (senhaconfValue === "") {
    setErrorFor(senhaconf, "A confirmação de senha é obrigatória.");    
  } else if (senhaconfValue !== senhaValue) {
    setErrorFor(senhaconf, "As senha não conferem.");    
  } else {
    setSuccessFor(senhaconf);
    flagsenhaconf = true;
  }

  if(flagnome==true && flagfone==true && flagcpf==true && flagsenha==true && flagsenhaconf==true){
    return true;   
  }else{    
    return false;    
  }

}



function checkInputsUsername() {
  const nomeValue = nome.value;
  

  //Validacao
  if (nomeValue === "") {
    setErrorFor(nome, "O nome de usuário é obrigatório.");
  } else {
    setSuccessFor(nome);
  }  
}

function checkInputsCpf() {
  const cpfValue = cpf.value;
  

  //Validacao
  if (cpfValue === "") {
    setErrorFor(cpf, "O CPF é obrigatório.");
  } else if (!testaCPF(cpfValue)) {
    setErrorFor(cpf, "Por favor, insira um CPF válido.");
  } else {
    setSuccessFor(cpf);
  }
}

function checkInputsFone() {
  const foneValue = fone.value;
  

  //Validacao
  if (foneValue === ""){
    setErrorFor(fone, "O telefone do usuário é obrigatório");
  }else{
    setSuccessFor(fone);
  }
}

function checkInputsSenha() {
  const senhaValue = senha.value;  
  
  if (senhaValue === "") {
    setErrorFor(senha, "A senha é obrigatória.");
  } else if (senhaValue.length < 4) {
    setErrorFor(senha, "A senha precisa ter no mínimo 4 caracteres.");
  } else {
    setSuccessFor(senha);
  }
}

function checkInputsSenhaConf() {
  const senhaValue = senha.value;  
  const senhaconfValue = senhaconf.value;


  if (senhaconfValue === "") {
    setErrorFor(senhaconf, "A confirmação de senha é obrigatória.");
  } else if (senhaconfValue !== senhaValue) {
    setErrorFor(senhaconf, "As senhas não conferem.");
  } else {
    setSuccessFor(senhaconf);
  }
}

function setErrorFor(input, message){

  const formGroup = input.parentElement;
  const small = formGroup.querySelector("small");

  small.innerText = message;  

  formGroup.className = "form-error";
}

function setSuccessFor(input) {
  const formGroup = input.parentElement;

  // Adicionar a classe de sucesso
  formGroup.className = "form-success";
}

function testaCPF(cpf) {
  var Soma;
  var Resto;
  Soma = 0;
if (cpf == "00000000000") return false;

for (i=1; i<=9; i++) Soma = Soma + parseInt(cpf.substring(i-1, i)) * (11 - i);
Resto = (Soma * 10) % 11;

  if ((Resto == 10) || (Resto == 11))  Resto = 0;
  if (Resto != parseInt(cpf.substring(9, 10)) ) return false;

Soma = 0;
  for (i = 1; i <= 10; i++) Soma = Soma + parseInt(cpf.substring(i-1, i)) * (12 - i);
  Resto = (Soma * 10) % 11;

  if ((Resto == 10) || (Resto == 11))  Resto = 0;
  if (Resto != parseInt(cpf.substring(10, 11) ) ) return false;
  return true;
}
