<?php
$contactos=[array("nombre"=>"Zelda","email"=>"zelda@hyrule.com")
            ,array("nombre"=>"Link","email"=>"link@hyrule.com")];
//según la diapo anterior, recibiremos una URI del estilo: resp.php/contacto/0
//obtenemos si se ha realizado un GET, POST, PUT o DELETE
switch ($_SERVER['REQUEST_METHOD']) {
    case "GET":
//creamos un array de 2 elementos. 1º con la URI hasta pokem/ , 2º con el resto (el id Bulbasur)
        //resp.php/contacto/0
        $consulta = explode("contacto/", $_SERVER['REQUEST_URI']); // extraemos el id (Bulbasur)
        if(count($consulta)>1){
            //resp.php/contacto/0
            $id=$consulta[1];
              echo json_encode($contactos[$id]); //retornamos la info del poke correspondiente en formato jSON
        }else{
            //resp.php/contacto/
            //{"respuesta":[{"nombre":"zelda","email":"zelda@hyrule.com"},{"nombre":"Link"}]}
            echo json_encode(array("respuesta"=>$contactos));
        }
        
      
        break;
    case "PUT": //actualizar un pokemon
////obtenemos la id del pokemon que queremos actualizar
//        $id = explode("contacto/", $_SERVER['REQUEST_URI'])[1];
//// Para capturar los datos entrada JSON que viene en el request HTTP:
//        $jsonPoke = json_decode(file_get_contents("php://input"), false);
//        $pokemons[$jsonPoke->nombre] = $jsonPoke;
//        echo json_encode($pokemons);
        break;
}

