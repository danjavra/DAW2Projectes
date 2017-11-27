var i=0;
var numcarrera=0;
var Caracol = [
    {nombre:"Speed Cargol", punts:0,velocitat:10,distancia:0},
    {nombre:"Cargolet", punts:0,velocitat:10,distancia:0 },
    {nombre:"Slow Cargol", punts:0,velocitat:10,distancia:0 },
    {nombre:"Gran Cargol", punts:0,velocitat:10,distancia:0 }
];

function iniciarCarrera(){
  
    numcarrera++;
    var carrera = document.getElementById("infoCarrera");
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
                <span class="col-xs-6">Nombre: ${caracol.nombre}</span>
                <span class="col-xs-6">Total: <span class='lol-${i}'>${caracol.distancia}</span></span>
                <span class="col-xs-6">Sprint: ${numcarrera}</span>
            </div>
        </li>
        `;
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
      Caracol[k].distancia += Math.floor(Math.random() * (Caracol[k].velocitat + Caracol[k].punts)) + 1;
     // Caracol[k].distancia += Caracol[k].velocitat++;
      sprint.innerHTML+="<table class='col-sm-6'><tr class='col-xs-12' style='background-color:#c0c0c0; border:5px solid white;'><td class='col-sm-1'>"+(k+1)+"º "+"</td><td class='col-sm-1'>"+"Nombre: "+Caracol[k].nombre+"</td><td class='col-sm-1'>"+"Total: <span class='springtotal-"+i+"'>"+Caracol[k].distancia+"</span></td><td class='col-sm-1'>"+"Sprint: "+i+"</td></tr></table>";
    
        } 
   
    }
 
}

function finalizar(){
        
        document.querySelectorAll("[class^='lol-']").forEach (function (item, index) {
            
            item.textContent = Caracol[index].velocitat;
            
        });
    }
     
    mostrarArray();   
     