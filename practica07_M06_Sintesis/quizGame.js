var contador = window.setInterval(miContador, 1000);
var d = 0;
var respuestas = 0;
var errores = 0;
var aciertos = 0;

function inicio() {
    
    if (respuestas<4){
    window.setInterval(preguntas, 5000);
    
    } if (respuestas===4){
    window.clearInterval(preguntas); 
    return finalizarJuego;
    }
}

function pararResultado(){
     document.getElementById("resultado").style.display="none";
}




function preguntas() {
    var random = Math.floor((Math.random() * 4) + 1);
     var preguntasRandom= document.getElementById("quiz");
     console.log(random);
    switch (random) {
        case 1:
            preguntasRandom.innerHTML = "<h2>"+"¿Que ciudad no es alemana?"+"</h2><br><ul>"+
        "<li onclick='error()'>"+"Dusseldorf"+"</li>"+
        "<li onclick='error()'>"+"köln"+"</li>"+
        "<li onclick='acierto()'>"+"Salzburg"+"</li>"+
        "<li onclick='error()'>"+"Ninguna de las respuestas anterioreses correcta. "+"</li>"+
        "</ul>";
            break;
        case 2:
            preguntasRandom.innerHTML = "<h2>"+"¿Cuál es el Oceano mas grande?"+"</h2><br><ul>"+
        "<li onclick='acierto()'>"+"Pacífico"+"</li>"+
        "<li onclick='error()'>"+"Atlántico"+"</li>"+
        "<li onclick='error()'>"+"Artico"+"</li>"+
        "<li onclick='error()'>"+"Ninguna de las respuestas anterioreses correcta. "+"</li>"+
        "</ul>";
            break;
        case 3:
            preguntasRandom.innerHTML = "<h2>"+"¿La patata es...?"+"</h2><br><ul>"+
        "<li onclick='error()'>"+"Una fruta"+"</li>"+
        "<li onclick='acierto()'>"+"Un tuberculo"+"</li>"+
        "<li onclick='error()'>"+"Una verdura"+"</li>"+
        "<li onclick='error()'>"+"Ninguna de las respuestas anterioreses correcta. "+"</li>"+
        "</ul>";
            break;
        case 4:
            preguntasRandom.innerHTML = "<h2>"+"¿Nombre real del héroe de DC The Flash?"+"</h2><br><ul>"+
        "<li onclick='error()'>"+"Bruce Wayne"+"</li>"+
        "<li onclick='error()'>"+"Barry Manilow"+"</li>"+
        "<li onclick='error()'>"+"John Allen"+"</li>"+
        "<li onclick='acierto()'>"+"Ninguna de las respuestas anterioreses correcta. "+"</li>"+
        "</ul>";
            break;
    }
   
   
}

function miContador() {
    document.getElementById("temporizador").innerHTML = d + " segundos";
    d++;
    if (d === 6) {
        d = 0;
        d++;
    }
}

function error(){
    document.getElementById("resultado").innerHTML = "<h3>¡ERROR!</h3>";
    respuestas++;
    errores++;
    console.log(respuestas);

}

function acierto(){
    document.getElementById("resultado").innerHTML = "<h3>¡CORRECTO!</h3>";
    respuestas++;
    aciertos++;
    console.log(respuestas);

}

function finalizarJuego(){
    
       window.close('juegoPreguntas.html');
       document.getElementById("juegoprueba").style.display;
       var printarResultados= document.getElementById("resultadoJuego");
       printarResultados.innerHTML= "<h2>Resultados del Quiz:</h2><br><ul>"+
        "<li>Nº de aciertos: "+aciertos+"</li>"+
        "<li>Nº de errores: "+errores+"</li>"+
        "</ul>";
       
    
}



