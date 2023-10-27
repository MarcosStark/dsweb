function addImage(){

    const node = document.createElement("td");
    const element = document.createElement("img");
    element.src = "https://media.istockphoto.com/id/1134441379/nl/foto/gehoorzaam-border-collie-hond-hoofd-portret.webp?b=1&s=612x612&w=0&k=20&c=dlpIyUcxMv9PVrDQOLjo7K-PHWZQcFx7f-DbdMaxJ3U=   ";
    node.appendChild(element);
    document.getElementById("teste").insertAdjacentElement('afterbegin', node);
    
}