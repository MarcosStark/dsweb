var x = 0;

document.getElementById("counter").addEventListener("click", function(){
    x++;
    document.getElementById("nClicks").innerHTML = x;
});

document.getElementById("reseter").addEventListener("click", function(){
    document.getElementById("nClicks").innerHTML = 0;
});
