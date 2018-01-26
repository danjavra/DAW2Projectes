
var valorWindowHeight = screen.availHeight;
var valorWindowWidth = screen.availWidth;
var valorScreenHeight = screen.height;
var valorScreenWidth = screen.width;
var profunditatColor = screen.colorDepth;
var profunditatPixel = screen.pixelDepth;

var urlWeb = location.href;
var indexBarra = urlWeb.lastIndexOf("/");
var nombre = urlWeb.substr(indexBarra+1);

var os = navigator.appVersion;
var browser = navigator.appName;
var appcode = navigator.appCodeName;

var divLista1 = document.getElementById("listaPropiedadesPantalla");
divLista1.innerHTML = "<ul>"+
       
        "<li>"+"Altura Pantalla Disponible: "+valorWindowHeight+"</li>"+
        "<li>"+"Anchura Pantalla Disponible: "+valorWindowWidth+"</li>"+
        "<li>"+"Altura Pantalla Màx: "+valorScreenHeight+"</li>"+
        "<li>"+"Anchura Pantalla Màx: "+valorScreenWidth+"</li>"+
        "<li>"+"Profunditat de color: "+profunditatColor+" bits</li>"+
        "<li>"+"Profunditat de pixel a la pantalla: "+profunditatPixel+" bits</li>"+

        "</ul>";

var divLista2 = document.getElementById("listaPropiedadesNavegador");
divLista2.innerHTML = "<ul>"+
        "<li>"+"Navegador web: "+browser+"</li>"+
        "<li>"+"Codigo Navegador Web: "+appcode+"</li>"+
        "<li>"+"Navegador Web: "+os+"</li>"+
        "</ul>";

var divLista3 = document.getElementById("listaPropiedadesHostweb");
divLista3.innerHTML = "<ul>"+
        "<li>"+"URL de la Web: "+urlWeb+"</li>"+
      
        "</ul>";