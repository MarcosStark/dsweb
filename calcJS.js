var historyNumb = [];
var historyNumb2 = [];
var lastNumb = [];
var operators = ["+","-","/","*"];
var operator;
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
            calc();
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
        lastNumb = [];
    }else{

        if(operator == undefined){
            lastNumb.push(numb);
            historyNumb.push(lastNumb.join(""));
        } else {
            lastNumb.push(numb);
            historyNumb2.push(lastNumb.join(""));
        }
    }
}   

function isOperator(numb){
   return operators.indexOf(numb) != -1;
}

function calc() {
    switch(operator){   

        case "+":
            result =  parseInt(historyNumb.pop()) + parseInt(historyNumb2.pop());
            break;  

        case "-":
            result =  parseInt(historyNumb.pop()) - parseInt(historyNumb2.pop());            
            break;  
        
        case "*":
            result =  parseInt(historyNumb.pop()) * parseInt(historyNumb2.pop()); 
            break;  
        
        case "/":
            result =  parseInt(historyNumb.pop()) / parseInt(historyNumb2.pop());
            break; 
    }
  }

    