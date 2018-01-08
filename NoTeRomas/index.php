

<html>
    <head>
        

        <meta charset="UTF-8">
        <title>Stucom GYM</title>
        <style>a{margin: 0 10px}</style>
    </head>
    <body style="text-align: center;">
         <h1>Bienvenido a NoTeRomas Gym</h1>
        <a style="margin: 50px 40px;" href="registro.php" class="registrar1">Registrarse</a>
        <a style="margin: 50px 40px;" href="login.php" class="login1">Log In</a>
        <h3>Actividades del centro</h3>
        <table style="width:100%; border-style: double; text-align: center;">
            <tr><th>Nombre</th><th>Precio</th><th>Capacidad</th></tr>
        <?php
        require_once 'bbdd.php';
        $posicion = 0;


        if (isset($_GET["posicion"])) {
            $posicion = $_GET["posicion"];
        } else {
            $posicion = 0;
        }
        $actividades = actividades($posicion);
        $total = totalActividades();
            while($fila = mysqli_fetch_array($actividades)){
                extract($fila);
                echo"<tr><td>$name</td><td>$price €/mes</td><td>$capacity</td><td>";
            }

        ?>
             </table>
             <br>
            <div>
                <?php
                
                        if($posicion>0){  
            echo "<a href='index.php?posicion=".($posicion - 5)."'>prev</a>";
        }
        
        if($posicion + 5 <=$total){
            echo "Mostrando " . ($posicion + 1) . " al " . ($posicion + 5) . " de $total ";
        }
        else {
            echo "Mostrando " . ($posicion + 1) . " al $total de $total";
        }
        
        if ($posicion + 5 < $total) {
            echo "<a href='index.php?posicion=" .($posicion + 5)."'>next</a>";
        }
                
                ?>    
            </div>
    </body>
</html>
