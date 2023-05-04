
function mostrarOnChange(sel){
    if(sel.value == 0){
        divC = document.getElementById("containerInterna");
        divC.style.display = "none";

        divT = document.getElementById("containerExterna");
        divT.style.display = "none";
    }else
    //Opcion interna
    if (sel.value==1){

        divT = document.getElementById("containerExterna");
        divT.style.display = "none";

        divC = document.getElementById("containerInterna");
        divC.style.display = "block";

        
//opcion externa
   }else if(sel.value ==2){    

        divC = document.getElementById("containerInterna");
        divC.style.display = "none";

        divC = document.getElementById("containerExterna");
        divC.style.display="block";
        
   }
}


document.addEventListener("DOMContentLoaded", mosOnChange() );

function mosOnChange(){
    var x = document.getElementById("interExtr").value;
    if (x ==='interno'){

        divT = document.getElementById("containerExterna");
        divT.style.display = "none";

        divC = document.getElementById("containerInterna");
        divC.style.display = "block";

        
//opcion externa
   }else if(x ==='externa'){    

        divC = document.getElementById("containerInterna");
        divC.style.display = "none";

        divC = document.getElementById("containerExterna");
        divC.style.display="block";
        
   }
}

// funcion para mostrar los equipos en el cronograma 
function listaOnChange(sel){
    if(sel.value == 0){
        divC = document.getElementById("computoCrom");
        divC.style.display = "none";

        divT = document.getElementById("impresorasCrom");
        divT.style.display = "none";
    }else
    //Opcion interna
    if (sel.value==1){

        divT = document.getElementById("impresorasCrom");
        divT.style.display = "none";

        divC = document.getElementById("computoCrom");
        divC.style.display = "block";

        
//opcion externa
   }else if(sel.value ==2){    

        divC = document.getElementById("computoCrom");
        divC.style.display = "none";

        divC = document.getElementById("impresorasCrom");
        divC.style.display="block";
        
   }
}
