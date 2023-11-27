formLogin = document.getElementById("login");
formLoginTrainer = document.getElementById("login-trainer");

function loginAdm(){

    formLogin.style.visibility = "visible";
    formLogin.style.display = "inline";
    formLoginTrainer.style.visibility = "hidden";
    formLoginTrainer.style.display = "none";
}

function loginTrainer(){

    formLoginTrainer.style.visibility = "visible";
    formLoginTrainer.style.display = "inline";
    formLogin.style.visibility = "hidden";
    formLogin.style.display = "none";
}