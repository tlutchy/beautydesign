const form = document.getElementById("form");
const formnome = document.getElementById("form-nome");
const formvalor = document.getElementById("form-valor");
const nome = document.getElementById("nome");
const valor = document.getElementById("valor");


formnome.addEventListener("focusout", (e) => {
  
  checkInputsUsername();  
});

formvalor.addEventListener("focusout", (e) => {
  
  checkInputsValor();
});



form.addEventListener('submit', (e) =>{
  checkInputs();
  if(checkInputs()==false){
    e.preventDefault();
  }
});



function checkInputs(){
  const nomeValue = nome.value;
  const valorValue = valor.value;  
  flagnome = false;
  flagvalor = false;  
  

  if (nomeValue === ""){
    setErrorFor(nome, "O nome do serviço é obrigatório");    
  }else{
    setSuccessFor(nome);
    flagnome = true;
  }
  
  if (valorValue === ""){
    setErrorFor(valor, "O valor do serviço é obrigatório");    
  }else{
    setSuccessFor(valor);
    flagvalor = true;
  }


  if(flagnome==true && flagvalor==true){
    return true;   
  }else{    
    return false;    
  }

}



function checkInputsUsername() {
  const nomeValue = nome.value;
  

  //Validacao
  if (nomeValue === "") {
    setErrorFor(nome, "O nome do serviço é obrigatório.");
  } else {
    setSuccessFor(nome);
  }  
}

function checkInputsValor() {
  const valorValue = valor.value;
  

  //Validacao
  if (valorValue === ""){
    setErrorFor(valor, "O valor do serviço é obrigatório.");    
  }else{
    setSuccessFor(valor);
    flagvalor = true;
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

