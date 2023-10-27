

function send(){

    const name = document.getElementById("name").value;
    const email = document.getElementById("email").value;
    const message = document.getElementById("msg").value;

    if(name && email && message != ""){
        alert("Nome:  " + name + "\n" + "Email:  " + email + "\n" + "Mensagem:  " + message);
    } else {
        alert("Por favor, preencha todos os campos!");
    }


}
