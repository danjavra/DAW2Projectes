
var valorWindowHeight = screen.availHeight;
var valorWindowWidth = screen.availWidth;
var valorScreenHeight = screen.height;
var valorScreenWidth = screen.width;
var profunditatColor = screen.colorDepth;
var profunditatPixel = screen.pixelDepth;

var urlWeb = location.href;
var port = location.port;

var os = navigator.appVersion;
var browser = navigator.appName;
var appcode = navigator.appCodeName;
var platform = navigator.platform;



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
        "<li>"+"Plataforma del Navegador Web: "+platform+"</li>"+
        "<li>"+"Navegador Web: "+os+"</li>"+
        "</ul>";

var divLista3 = document.getElementById("listaPropiedadesHostweb");
divLista3.innerHTML = "<ul>"+
        "<li>"+"URL de la Web: "+urlWeb+"</li>"+
        "<li>"+"Port de la Web: "+port+"</li>"+
        "<br><a href='https://www.stucom.com/' class='btn btn-warning btn-sm'>Link web de Stucom</a>"+
      
        "</ul>";

var divLista4 = document.getElementById("glyphIcon1");
divLista4.innerHTML = 
        "<a style='text-align: center; font-size: 40px'><span class='glyphicon glyphicon-camera'></span></a>";

var divLista5 = document.getElementById("glyphIcon2");
divLista5.innerHTML = 
        "<a style='text-align: center; font-size: 40px'><span class='glyphicon glyphicon-globe'></span></a>";

var divLista6 = document.getElementById("glyphIcon3");
divLista6.innerHTML = 
        "<a style='text-align: center; font-size: 40px'><span class='glyphicon glyphicon-film'></span></a>";

var divLista7 = document.getElementById("glyphIcon4");
divLista7.innerHTML = 
        "<a style='text-align: center; font-size: 40px'><span class='glyphicon glyphicon-headphones'></span></a>";

var divLista8 = document.getElementById("glyphIcon5");
divLista8.innerHTML = 
        "<a style='text-align: center; font-size: 40px'><span class='glyphicon glyphicon-gift'></span></a>";