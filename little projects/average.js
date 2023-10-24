var n1;
var n2;
var result;
var situation;

function initialize(){
    n1 = document.getElementById("n1").value;
    n2 = document.getElementById("n2").value;
}

function calc(){
    ReadableStreamDefaultController
}

function show(){
    document.getElementById("tableN1").innerHTML = n1;
    document.getElementById("tableN2").innerHTML = n2;
    result = ((parseFloat(n1) + parseFloat(n2)) / 2);
    document.getElementById("tableResult").innerHTML = result; 
    situation = document.getElementById("tableSituation");

    if(result >= 6){
        document.getElementById("tableSituation").innerHTML = "Aprovado";
        situation.style.backgroundColor = "green";
    } else {
        document.getElementById("tableSituation").innerHTML = "Reprovado";
        situation.style.backgroundColor = "red";
    }
}   

    function remove(){
    document.getElementById("tableN1").innerHTML = "";
    document.getElementById("tableN2").innerHTML = "";
    document.getElementById("tableResult").innerHTML = "";
    document.getElementById("tableSituation").innerHTML = "";
    situation.style.backgroundColor = "";
}



