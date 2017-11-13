
var Caracol = [
    {nombre:"Speed Cargol", punts:0,velocitat:10 },
    {nombre:"Cargolet", punts:0,velocitat:10 },
    {nombre:"Slow Cargol", punts:0,velocitat:10 },
    {nombre:"Gran Cargol", punts:0,velocitat:10 }
];

function mostrarArray(){
    var info= document.getElementById("infoArray");
    info.innerHTML="";
    for(k=0; k<Caracol.length;k++){
        info.innerHTML+="<div>"+Caracol[k]+"</dv>";
    }
}

function calcularPunts(){
    
    
}



        