var i=0;
var Caracol = [
    {nombre:"Speed Cargol", punts:0,velocitat:10,distancia:0},
    {nombre:"Cargolet", punts:0,velocitat:10,distancia:0 },
    {nombre:"Slow Cargol", punts:0,velocitat:10,distancia:0 },
    {nombre:"Gran Cargol", punts:0,velocitat:10,distancia:0 }
];

function iniciarCarrera(){
    var carrera = document.getElementById("infoCarrera");
    carrera.innerHTML+="<div class='row' id='infoSprint'><div class='col-xs-10' style='background-color: #8a6d3b; text-align: center' >SPRINT 2</div><div class='col-xs-2' style='background-color: #337ab7; text-align: center' onclick='sprint();' >!RUN¡</div>"
    
}

function mostrarArray(){
    var info= document.getElementById("infoArray");
    
    for(k=0; k<Caracol.length;k++){
        info.innerHTML+="<div class='col-xs-12 col-sm-6' style='background-color:#c0c0c0'>"+(k+1)+"º "+Caracol[k].nombre+" Punts: "+Caracol[k].punts+" Velocitat: "+Caracol[k].velocitat+"</div>";
    }
}

function sprint(){
    var sprint= document.getElementById("infoSprint");
    var Sprints = [{Caracol}];
    i++;
    for (var n=0;n<Sprints.length;n++){
       
   sprint.innerHTML+="<div class='col-xs-12' style='background-color: #8a6d3b; text-align: center'>SPRINT "+i+"</div>";
   
    for(k=0; k<Caracol.length;k++){
      Caracol[k].velocitat += Math.floor(Math.random() * 11) + 10;
      Caracol[k].distancia += Caracol[k].velocitat++;
      sprint.innerHTML+="<table class='col-sm-6'><tr class='col-xs-12' style='background-color:#c0c0c0; border:5px solid white;'><td class='col-sm-1'>"+(k+1)+"º "+"</td><td class='col-sm-1'>"+"Nombre: "+Caracol[k].nombre+"</td><td class='col-sm-1'>"+"Total: "+Caracol[k].distancia+"</td><td class='col-sm-1'>"+"Sprint: "+i+"</td></tr></table>";
   } 
    
    }
    
}

     
    mostrarArray();   
     