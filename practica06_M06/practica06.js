var valorMaxim = Number.MAX_VALUE;
var valorMinim = Number.MIN_VALUE;
var valorWindowHeight = window.innerHeight;
var valorWindowWidth = window.innerWidth;
var valorWebHeight = screen.height;
var valorWebWidth = screen.width;
var urlWeb = location.href;

var divLista = document.getElementById("listaPropiedades");
divLista.innerHTML = "<ul>"+
        "<li>"+"Valor MAX: "+valorMaxim+"</li>"+
        "<li>"+"Valor MIN: "+valorMinim+"</li>"+
        "<li>"+"Altura Pantalla: "+valorWindowHeight+"</li>"+
        "<li>"+"Anchura Pantalla: "+valorWindowWidth+"</li>"+
        "<li>"+"Altura Web: "+valorWebHeight+"</li>"+
        "<li>"+"Anchura Web: "+valorWebWidth+"</li>"+
        "<li>"+"URL de la Web: "+urlWeb+"</li>"+

        "</ul>";

