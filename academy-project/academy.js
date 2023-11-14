var stdName, stdAge, stdWeight, stdHeight, stdDAte, stdZP, stdNumber, stdComplement, stdTelephone, stdEmail;

function stdRegister(){
    
    stdName = document.getElementById("std-name").value;
    stdAge = document.getElementById("std-age").value;
    stdWeight = document.getElementById("std-weight").value;
    stdHeight = document.getElementById("std-height").value;
    stdDAte = document.getElementById("std-date").value;
    stdZP = document.getElementById("std-zp").value;
    stdNumber = document.getElementById("std-number").value;
    stdComplement = document.getElementById("std-complement").value;
    stdTelephone = document.getElementById("std-telephone").value;
    stdEmail = document.getElementById("std-email").value;
}

function consultStudents(){
    const std_form = document.getElementById("std-form");
    const std_bd = document.getElementById("std-bd");
    
    std_form.style.display = "none";
    std_bd.style.visibility = "visible";

    document.getElementById("std-bd-name").innerHTML = stdName;
    document.getElementById("std-bd-age").innerHTML = stdAge;
    document.getElementById("std-bd-weight").innerHTML = stdWeight;
    document.getElementById("std-bd-height").innerHTML = stdHeight;
    document.getElementById("std-bd-date").innerHTML = stdDAte;
    document.getElementById("std-bd-zp").innerHTML = stdZP
    document.getElementById("std-bd-number").innerHTML = stdNumber;
    document.getElementById("std-bd-complement").innerHTML = stdComplement;
    document.getElementById("std-bd-telephone").innerHTML = stdTelephone;
    document.getElementById("std-bd-email").innerHTML = stdEmail;
} 

function trRegister(){

    
}