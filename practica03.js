/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//Ex.1:
var listaNumeros = [3,4,5,6,6];

listaNumeros[0]= Math.floor(Math.random() * (10 - 0)) + 0;
listaNumeros[1]= Math.floor(Math.random() * (10 - 0)) + 0;
listaNumeros[2]= Math.floor(Math.random() * (10 - 0)) + 0;
listaNumeros[3]= Math.floor(Math.random() * (10 - 0)) + 0;
listaNumeros[4]= Math.floor(Math.random() * (10 - 0)) + 0;

function mostraArray(){
    var info= document.getElementById("infoArray");
    info.innerHTML="";
    for(k=0;k<listaNumeros.length;k++){
        info.innerHTML+="<div>"+listaNumeros[k]+"</div>";
    }           
}

//Ex.2:
function showFirstLastnumber(){
   var info= document.getElementById("infoArray");
   info.innerHTML="<div>"+listaNumeros[0]+"</div>";
   info.innerHTML="<div>"+listaNumeros[listaNumeros.lenght-1]+"</div>";
   mostraArray();
}


//Ex.3:
function addLastnumber(){
  // var numero = window.prompt("Indica el numero");
    
   numero = document.getElementById("numero").value;
    
    listaNumeros.push(numero);
    mostraArray();
}

//Ex.4:
function addFirstnumber(){
  // var numero = window.prompt("Indica el numero");
    
   numero = document.getElementById("numero").value;
    
    listaNumeros.unshift(numero);
    mostraArray();
}

//Ex.8:
function delNumberPosition(){
    
    var num = window.prompt("position que quieres eliminar");
    
    num=parseInt(num);
    listaNumeros.splice(num-1,1);
    mostraArray();
    
}

//Ex.9:

function delNumberValue(){
    
    var num = window.prompt("valor que quieres eliminar"); 
    
    num=parseInt(num);
    for(var k=0;k<listaNumeros.length;k++){
        if (listaNumeros[k]===num){ 
            listaNumeros.splice(k,1);
            k-=1;
            mostraArray();
        }
    console.log("posicion eliminada"+k);
    }
    
    
}