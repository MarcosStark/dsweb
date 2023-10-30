var stdName = [], stdAge = [], stdWeight = [], stdHeight = [], stdDAte = [], stdZP = [], stdNumber = [], stdComplement = [], stdTelephone = [], stdEmail = [];
/*var register = {

    stdNames = "Mar
    stdAges: [stdAge],
    stdWeights: [stdWeight],
    stdHeight: [stdHeight],
    stdDAtes: [stdDAte],
    stdZPs: [stdZP],
    stdNumbers: [stdNumber],
    stdComplements: [stdComplement],
    stdTelephones: [stdTelephone],
    stdEmails: [stdEmail]
};*/

function stdRegister(){
    
    stdName.push(document.getElementById("std-name").value);
    /*stdAge = document.getElementById("std-age").push(value);
    stdWeight = document.getElementById("std-weight").push(value);
    stdHeight = document.getElementById("std-height").push(value);
    stdDAte = document.getElementById("std-date").push(value);
    stdZP = document.getElementById("std-zp").push(value);
    stdNumber = document.getElementById("std-number").push(value);
    stdComplement = document.getElementById("std-complement").push(value);
    stdTelephone = document.getElementById("std-telephone").push(value);
    stdEmail = document.getElementById("std-email").push(value);*/
    if(stdName != ""){
        const teste = document.createElement("td");
        document.getElementById("teste1").appendChild(teste);

        document.getElementById("std-bd-name").innerHTML = stdName;
  
    }
}

function consultStudents(){
    const std_form = document.getElementById("std-form");
    const std_bd = document.getElementById("std-bd");
    
    std_form.style.display = "none";
    std_bd.style.visibility = "visible";

    /*document.getElementById("std-bd-age").innerHTML = stdAge;
    document.getElementById("std-bd-weight").innerHTML = stdWeight;
    document.getElementById("std-bd-height").innerHTML = stdHeight;
    document.getElementById("std-bd-date").innerHTML = stdDAte;
    document.getElementById("std-bd-zp").innerHTML = stdZP
    document.getElementById("std-bd-number").innerHTML = stdNumber;
    document.getElementById("std-bd-complement").innerHTML = stdComplement;
    document.getElementById("std-bd-telephone").innerHTML = stdTelephone;
    document.getElementById("std-bd-email").innerHTML = stdEmail;*/
} 