function addImage(){

    const node = document.createElement("td");
    const element = document.createElement("img");
    element.src = "https://cdn.pixabay.com/photo/2023/10/01/12/27/border-collie-8287329_1280.jpg";
    node.appendChild(element);
    document.getElementById("teste").appendChild(node);
    
}