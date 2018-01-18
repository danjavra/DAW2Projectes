var valorMaxim = Number.MAX_VALUE;
var valorMinim = Number.MIN_VALUE;
var valorWindowHeight = screen.availHeight;
var valorWindowWidth = screen.availWidth;
var valorWebHeight = window.innerHeight;
var valorWebWidth = window.innerWidth;
var urlWeb = location.href;
var indexBarra = urlWeb.lastIndexOf("/");
var nombre = urlWeb.substr(indexBarra+1);
var random = Math.floor(Math.random() * 201);
var os = navigator.appVersion;

var divLista1 = document.getElementById("listaPropiedadesPantalla");
divLista1.innerHTML = "<ul>"+
       
        "<li>"+"Altura Pantalla: "+valorWindowHeight+"</li>"+
        "<li>"+"Anchura Pantalla: "+valorWindowWidth+"</li>"+
       
        
        "<li>"+"Nombre de la Web con su extensión (index.html): "+nombre+"</li>"+
       
       
        "</ul>";

var divLista2 = document.getElementById("listaPropiedadesNavegador");
divLista2.innerHTML = "<ul>"+
        "<li>"+"Altura Web: "+valorWebHeight+"</li>"+
        "<li>"+"Anchura Web: "+valorWebWidth+"</li>"+
        
        "</ul>";

var divLista3 = document.getElementById("listaPropiedadesHostweb");
divLista3.innerHTML = "<ul>"+
        "<li>"+"URL de la Web: "+urlWeb+"</li>"+
        
        
        "</ul>";