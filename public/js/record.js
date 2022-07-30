const form = document.getElementById('form');
const username = document.getElementById('name');
const email = document.getElementById('email');
const password = document.getElementById('password');

form.addEventListener('submit', (event) =>  {
    event.preventDefault()

    checkInputs ()
})

function checkInputs() {
    const usernameValue = username.value.trim();
    const emailValue = email.value.trim();
    const passwordValue = password.value.trim();

    if(usernameValue === ''){
        errorValidation(username, 'Preencha esse campo')
    }
    else {  
        sucessValidation(username)
    }
    if(emailValue === ''){
        errorValidation(email, 'Preencha esse campo')

    }
    else {  
        sucessValidation(email)
    }

    if(passwordValue === ''){
        errorValidation(password, 'Preencha esse campo');
    }
    else if(passwordValue == 3253){
        sucessValidation(password);
    }
    else {  
        errorValidation(password, 'Senha Invalida');
    }
}

function errorValidation(input, message) {
    const inputFields = input.parentElement;
    const small = inputFields.querySelector('small');

    small.innerText = message;

    inputFields.className = 'inputFields error'
}

function sucessValidation (input) {
    const inputFields = input.parentElement;

    inputFields.className = 'inputFields sucess'

}

const btn = document.querySelector("#password")
btn.addEventListener("keyup", function(event){

    const senha = document.querySelector("#password")

    if (senha.value == 3253  && email.value !== "" && username !== "") {
        //habilita o botão
        document.getElementById("btnSubmit").disabled = false; 
      } 
      else {
        //desabilita o botão se o conteúdo do input ficar em branco
        document.getElementById("btnSubmit").disabled = true;
      }});