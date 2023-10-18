function time(){
    var now = new Date();
    document.getElementById("display").innerHTML =  now.toLocaleTimeString();
    setTimeout("time()", 1000);
}
