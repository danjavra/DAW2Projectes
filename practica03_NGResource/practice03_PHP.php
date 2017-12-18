<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $players=array("players"=>
            [array("texto"=>"Saludo","edad"=> "33"),array("texto" =>"Saludo2", "edad"=>"44")]);
        
        switch($_SERVER['REQUEST_METHOD']) {
            CASE "GET":
                echo json_encode($players);
                break;
            CASE "POST":
                $jsonPlayer = json_decode(file_get_contents("php://input"),false);
                array_push($players["players"], $jsonPlayer);
                echo json_encode($players);
                break;
        }
       
        
       /* $pokemons = array("Bulbasaur" => array("nombre" => "Bulbasur", "tipo" => ["planta", "veneno"])
 , "Ivysaur " => array("nombre" => "Ivysaur", "tipo" => ["planta", "veneno"]) );
//según la diapo anterior, recibiremos una URI del estilo: resp.php/pokem/Bulbasur
//obtenemos si se ha realizado un GET, POST, PUT o DELETE
switch ($_SERVER['REQUEST_METHOD']) {
 case "GET":
 //creamos un array de 2 elementos. 1º con la URI hasta pokem/ , 2º con el resto (el id Bulbasur)
 $id = explode("pokem/", $_SERVER['REQUEST_URI'])[1]; // extraemos el id (Bulbasur)
 echo json_encode($pokemons[$id]); //retornamos la info del poke correspondiente en formato jSON
 break;
 case "PUT": //actualizar un pokemon
 //obtenemos la id del pokemon que queremos actualizar
 $id = explode("pokem/", $_SERVER['REQUEST_URI'])[1];
 // Para capturar los datos entrada JSON que viene en el request HTTP:
 $jsonPoke = json_decode(file_get_contents("php://input"), false);
 $pokemons[$jsonPoke->nombre] = $jsonPoke;
 echo json_encode($pokemons);
 break;
} */
        ?>
    </body>
</html>
