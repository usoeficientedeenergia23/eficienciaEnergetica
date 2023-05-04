'use strict'
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById("divbuscar").addEventListener('input', buscarDatos);
         });
        

         function buscarDatos(){
            let table = document.getElementById('tabla');
            let wordToFind = document.getElementById('wordToFind').value.toLowerCase();
            let rowNoSearch = document.getElementById('noSearch');
            let total = 0;
            
            for(let i=0; i < table.rows.length; i++ ){
            
                let findFlag = false;
                const rows = tabla.rows[i].getElementsByTagName('td');
               
                for(let j=0; j<rows.length; j++){
                    const compareWith=rows[j].innerHTML.toLowerCase();
                    

                    if(wordToFind.length==0 || compareWith.indexOf(wordToFind)>-1){
                        findFlag=true;
                        total++;
                    }
                }
                if(findFlag){
                    table.rows[i].style.display='';
                    rowNoSearch.style.display='';
                }else{
                   
                    table.rows[i].style.display='none';
                    
                }
            }
         }