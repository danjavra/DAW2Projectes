
var Caracol = [
    {nombre:"Speed Cargol", punts:0,velocitat:10,distancia:0},
    {nombre:"Cargolet", punts:0,velocitat:10,distancia:0 },
    {nombre:"Slow Cargol", punts:0,velocitat:10,distancia:0 },
    {nombre:"Gran Cargol", punts:0,velocitat:10,distancia:0 }
];

function mostrarArray(){
    var info= document.getElementById("infoArray");
    
    for(k=0; k<Caracol.length;k++){
        info.innerHTML+="<div class='col-xs-12 col-sm-6' style='background-color:#c0c0c0'>"+(k+1)+"º "+Caracol[k].nombre+" Punts: "+Caracol[k].punts+" Velocitat: "+Caracol[k].velocitat+"</div>";
    }
}

function calcularVelocitat(){
    for(k=0; k<Caracol.length;k++){
        Caracol[k].punts= Math.floor(Math.random() * (Caracol[k].velocitat - 0));
    }
    
}

function calcularDistancia(){
     for(k=0; k<Caracol.length;k++){
        Caracol[k].distancia= Caracol[k].punts + Caracol[k].velocitat;
    }
}

     mostrarArray();   