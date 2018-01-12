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

var divLista = document.getElementById("listaPropiedades");
divLista.innerHTML = "<ul>"+
        "<li>"+"Valor MAX: "+valorMaxim+"</li>"+
        "<li>"+"Valor MIN: "+valorMinim+"</li>"+
        "<li>"+"Altura Pantalla: "+valorWindowHeight+"</li>"+
        "<li>"+"Anchura Pantalla: "+valorWindowWidth+"</li>"+
        "<li>"+"Altura Web: "+valorWebHeight+"</li>"+
        "<li>"+"Anchura Web: "+valorWebWidth+"</li>"+
        "<li>"+"URL de la Web: "+urlWeb+"</li>"+
        "<li>"+"Nombre de la Web con su extensión (index.html): "+nombre+"</li>"+
        "<li>"+"Un valor aleatorio entre 0 y 200: "+random+"</li>"+
        "<li>"+"Sistema operativo del ordenador: "+os+"</li>"+
        "</ul>";

