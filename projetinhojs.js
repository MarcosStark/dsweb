var name;
var age;
var email;
var situation;

function initialize(){
    name = document.getElementById("name").value;
    age = document.getElementById("age").value;
    email = document.getElementById("email").value; 
}

function show(){
    document.getElementById("tableName").innerHTML = name;
    document.getElementById("tableAge").innerHTML = age;
    document.getElementById("tableEmail").innerHTML = email;
    situation = document.getElementById("tableSituation");

    if(age >= 25){
        document.getElementById("tableSituation").innerHTML = "Aprovado";
        situation.style.backgroundColor = "green";
    } else {
        document.getElementById("tableSituation").innerHTML = "Reprovado";
        situation.style.backgroundColor = "red";
    }
}

    function remove(){
    document.getElementById("tableName").innerHTML = "";
    document.getElementById("tableAge").innerHTML = "";
    document.getElementById("tableEmail").innerHTML = "";

    document.getElementById("tableSituation").innerHTML = "";
    situation.style.backgroundColor = "";
}




