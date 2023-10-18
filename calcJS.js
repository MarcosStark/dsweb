var historyNumb = [];
var operators = ["+","-","/","*"];
var operator;
var lastNumb;
var result;

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
            calc(parseInt(e.key));
            document.getElementById("display").innerHTML = e.key;
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
            calc(e.key);
            document.getElementById("display").innerHTML = e.key;
            break;

        case "Enter":
        case "=":
            document.getElementById("display").innerHTML = result;
            break;

        case ".":
        case ",":
            break;
    }
})

function calc(numb){

    if(operators.indexOf(numb) == 0){
        operator = numb;
    } else {
        historyNumb.push(numb);
    }

    result = historyNumb.reduce(myFunc); 
    console.log(result);
}

function myFunc(total, num) {
    console.log(operator);
    switch(operator){

        case "+":
        return total + num;
        break;  
    }
  }

    