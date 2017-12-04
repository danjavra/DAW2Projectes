var i=0;
var numcarrera=0;
var Caracol = [
    {nombre:"Speed Cargol", punts:0,velocitat:10,distancia:0},
    {nombre:"Cargolet", punts:0,velocitat:10,distancia:0 },
    {nombre:"Slow Cargol", punts:0,velocitat:10,distancia:0 },
    {nombre:"Gran Cargol", punts:0,velocitat:10,distancia:0 }
];
var Mascota = [
    {nombre:"Tortuga", slogan: "Cowabunga"},
    {nombre:"Pirata", slogan: "Yahr!"},
    {nombre:"Chicho", slogan: "3Puntos!"},
    {nombre:"Pokemon", slogan: "Catch Em!"}
  
];
var distanciaMax1=0,distanciaMax2=0,distanciaMax3=0,distanciaMax4=0;
Carreras = [];
 
var info= document.getElementById("infoArray");
var sprint= document.getElementById("infoSprint");
function mostrarArray(){

    for(k=0; k<4;k++){
        info.innerHTML+="<div class='col-xs-12 col-sm-6' style='background-color:#c0c0c0'>"+
                "<span>"+(k+1)+"º "+Caracol[k].nombre+" Punts: "+Caracol[k].punts+" Velocitat: "+Caracol[k].velocitat+"</span>"+
                "<span>Mascota ("+Mascota[k].nombre+": "+Mascota[k].slogan+" )</span></div>"; 
    }
}

var carrera = document.getElementById("infoCarrera");
function iniciarCarrera(){
    
    numcarrera++;
    
    carrera.innerHTML+=`
            <div class='col-xs-10' style='background-color: #8a6d3b; text-align: center' >Carrera ${numcarrera}</div>
            <div class='col-xs-2' style='background-color: #337ab7; text-align: center' onclick='sprint();' >!RUN¡</div>
            `;
    var totalsprint=document.getElementById("infototalSprint");
      totalsprint.innerHTML+=`<ul class="list-group">${Caracol.map(prints).join(' ')}</ul>`;
}


function prints(caracol, i) {
    
    return `
        <li class="list-group-item col-xs-6">
            <div class='col-xs-12'>
                <span class="col-xs-6">${i+1}º</span>
                <span class="col-xs-6">Nom: ${caracol.nombre}</span>
                <span class="col-xs-6">Total: <span class='lol-${i}'>${caracol.distancia}</span></span>
                <span class="col-xs-6">Sprint: ${numcarrera}</span>
            </div>
        </li>
        `;
}


function sprint(){
    
    
    Sprints = [{Caracol}];
    i++;
    for (var n=0;n<Sprints.length;n++){
       
   sprint.innerHTML+="<div class='col-xs-12' style='background-color: #8a6d3b; text-align: center'>SPRINT "+i+"</div>";
   
    for(k=0; k<Caracol.length;k++){
      Caracol[k].distancia += Math.floor(Math.random() * (Caracol[k].velocitat + Caracol[k].punts)) + 1;
    
      sprint.innerHTML+="<table class='col-sm-6'><tr class='col-xs-12' style='background-color:#c0c0c0; border:5px solid white;'><td class='col-sm-1'>"+(k+1)+"º "+"</td><td class='col-sm-1'>"+"Nom: "+Caracol[k].nombre+"</td><td class='col-sm-1'>"+"Total: <span class='springtotal-"+i+"'>"+Caracol[k].distancia+"</span></td><td class='col-sm-1'>"+"Sprint: "+i+"</td></tr></table>";
   
    if(Caracol[0].distancia>distanciaMax1){
        distanciaMax1 = Caracol[0].distancia;
    }
    if(Caracol[1].distancia>distanciaMax2){
        distanciaMax2 = Caracol[1].distancia;
    }
    if(Caracol[2].distancia>distanciaMax3){
        distanciaMax3 = Caracol[2].distancia;
    }
    if(Caracol[3].distancia>distanciaMax4){
        distanciaMax4 = Caracol[3].distancia;
    }
        } 
   
    }
 
}

function finalizar(){
         sprint.innerHTML="";
         iniciarCarrera.innerHTML="";
         
        document.querySelectorAll("[class^='lol-']").forEach (function (item, index) {
            
            item.textContent = Caracol[index].distancia;
            
        });
    }
     
    mostrarArray();   
     