function calc(){
    var number = document.getElementById("number").value;

    if(number % 2 == 0){
        document.getElementById("result").innerHTML = "par";
    } else {
        document.getElementById("result").innerHTML = "ímpar";
    }
}


