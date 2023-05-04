function mostrarComputo(){
    // if (sel.value==1){
        divC = document.getElementById("Impresoras");
        divC.style.display = "none";

        divT = document.getElementById("EquipoCompu");
        divT.style.display = "block";
}
//opcion computo
//    }else if(sel.value ==2){    
function mostrarImpresora(){
        divC = document.getElementById("EquipoCompu");
        divC.style.display = "none";

        divC = document.getElementById("Impresoras");
        divC.style.display="block";
}