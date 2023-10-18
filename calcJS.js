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
            getValues(parseInt(e.key));
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
            getValues(e.key);
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

function getValues(numb){

    if(isOperator(numb) == true){
        operator = numb;
        console.log("op: " + operator);

    }else{
        historyNumb.push(numb);
        console.log("qq?");
    }

    result = historyNumb.reduce(calc); 
    console.log(result);
}

function isOperator(numb){
    console.log("teste: " + numb);
   return operators.indexOf(numb) != -1;
}

function calc(total, value) {
    console.log(operator);
    switch(operator){   

        case "+":
            return total + value;
            break;  

        case "-":
            return total - value;
            break;  
        
        case "*":
            return total * value;
            break;  
        
        case "/":
            return total / value;
            break; 
    }
  }

    