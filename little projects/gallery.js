var x = 1;

function addImage(){
    if(x <= 4){
        const node = document.createElement("td");
        const element = document.createElement("img");
        element.src = "https://media.istockphoto.com/id/1134441379/nl/foto/gehoorzaam-border-collie-hond-hoofd-portret.webp?b=1&s=612x612&w=0&k=20&c=dlpIyUcxMv9PVrDQOLjo7K-PHWZQcFx7f-DbdMaxJ3U=   ";
        node.appendChild(element);
        document.getElementById("teste").insertAdjacentElement('afterbegin', node);
        //console.log(x); 
        x = x + 1;
    } else {
  
        if(x == 5){
            console.log("ok", x);

            node = document.createElement("tr");
            element = document.createElement("img");
            element.src = "https://media.istockphoto.com/id/1134441379/nl/foto/gehoorzaam-border-collie-hond-hoofd-portret.webp?b=1&s=612x612&w=0&k=20&c=dlpIyUcxMv9PVrDQOLjo7K-PHWZQcFx7f-DbdMaxJ3U=   ";
            node.appendChild(element);
            document.getElementById("teste").insertAdjacentElement('afterbegin', node);

            //console.log("unrum"); 
        }   

        x = 1;
    }

}   