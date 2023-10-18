var historyNumb = [];
var lastNumb;

document.addEventListener("keyup", e=> {         
    switch(e.key){

        case "0":
        case "1":
        case "2":
        case "3":
        case "4":
        case "5":
        case "6":
        case "7":
        case "8":
        case "9":
            document.getElementById("display").innerHTML = e.key;
            calc(e.key);
            break;

            case "Escape": 
            break;

        case "Backspace":
            break;

        case "+":
        case "-":
        case "/":
        case "*":
        case "%":
            break;

        case "Enter":
        case "=":
            break;

        case ".":
        case ",":
            break;
    }
})

calc(){

}
    