

<html>
    <head>
        

        <meta charset="UTF-8">
        <title>Stucom GYM</title>
        
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
        
        $date = date('Y-m-d H:i:s');

        if (isset($_GET["posicion"])) {
            $posicion = $_GET["posicion"];
        } else {
            $posicion = 0;
        }
        $totalActividades = totalActividades($posicion,5);
            while($fila = mysqli_fetch_array($totalActividades)){
                extract($fila);
                echo"<tr><td>$name</td><td>$price €/mes</td><td>$capacity</td><td>";
            }

        ?>
             </table>
    </body>
</html>
