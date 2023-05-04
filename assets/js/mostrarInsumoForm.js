function mostrarNoRea(){
    // if (sel.value==1){
        divC = document.getElementById("realizados");
        divC.style.display = "none";

        divT = document.getElementById("por_realizar");
        divT.style.display = "block";
}
//opcion computo
//    }else if(sel.value ==2){    
function mostrarRea(){
        divC = document.getElementById("por_realizar");
        divC.style.display = "none";

        divC = document.getElementById("realizados");
        divC.style.display="block";
}