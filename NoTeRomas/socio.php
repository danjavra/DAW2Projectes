<html>
    <head>
        

        <meta charset="UTF-8">
        <title>Stucom GYM</title>
        <style>a{margin: 0 10px}</style>
    </head>
    <body>
        
        <?php
        session_start();
        $usuario=$_SESSION["user"];
        ?>
        <h1>Página del Socio</h1>
        <h2>Bienvenido <?php echo ucfirst($usuario); ?></h2>
        <h3>Actividades disponibles</h3>
        <table style="width:100%; text-align: center;">
            <tr><th>Nombre</th><th>Precio</th><th>Capacidad</th></tr>
        <?php
        require_once 'bbdd.php';
        $posicion = 0;
        $idmember = getIdByName($usuario);
        $date = date('Y-m-d H:i:s');

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
            echo "<a href='socio.php?posicion=".($posicion - 5)."'>prev</a>";
        }
        
        if($posicion + 5 <=$total){
            echo "Mostrando " . ($posicion + 1) . " al " . ($posicion + 5) . " de $total ";
        }
        else {
            echo "Mostrando " . ($posicion + 1) . " al $total de $total";
        }
        
        if ($posicion + 5 < $total) {
            echo "<a href='socio.php?posicion=" .($posicion + 5)."'>next</a>";
        }
                
                ?>    
            </div>
             <br>
             <h2>Inscribirse a una actividad</h2>
           <form action="" method="post">
              
               <!-- <p><input type="hidden" name="idmember" value="<?php echo $idmember ?>"></p> -->
                       <p>Actividad:</p>
                       <select type="select" name="activity">
                   <?php  $actividadesDisp = actividadesDispo($usuario);
                
                while($fila = mysqli_fetch_array($actividadesDisp)){
                extract($fila);
                echo" <option value='$name'>$name</opcion>";
            } ?>
                   </select>
            
            <p><input type="hidden" name="date" value="<?php echo $date ?>"></p> 
            <p><input type="submit" name="enroll" value="Apuntarse"</p>
        </form>
              <?php
      
        if (isset($_POST["enroll"])) {
            require_once 'bbdd.php';
            $resultado = apuntarActividad($_POST["activity"], $_POST["date"],$idmember);
            if ($resultado == "ok") {
                echo "<p>Usuario inscrito en la actividad.</p>";
            } else {
                echo $msg;
            }
        }
        ?>
         <br>
         <?php echo $idmember ?>
         <h4>Coste mensual del total de las actividades:</h4>
    </body>
</html>
