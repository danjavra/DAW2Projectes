<html>
    <head>
        

        <meta charset="UTF-8">
        <title>Stucom GYM</title>
        <style>a{margin: 0 10px}</style>
    </head>
    <body>
        
        <?php
        require_once 'bbdd.php';
        session_start();
        $usuario=$_SESSION["user"];
        $idmember = getIdByName($usuario);
        
        $date = date('Y-m-d H:i:s');
        ?>
        <h1>Página del Socio</h1>
        <h2>Bienvenido <?php echo ucfirst($usuario); ?></h2>
        
             <h3>Inscribirse a una actividad</h3>
             <form action="" method="post">
              
             <p><input type="hidden" name="idmember" value="<?php echo $idmember ?>"></p> 
                       <p>Actividad:</p>
                       <select type="select" name="activity">
                   <?php  $actividadesDisp = actividadesDispo($idmember);
                
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
            
            $numCapacity = getCapacityName($_POST["activity"]);
            
            $numinscritos = getNumInscritos($_POST["activity"]);
            echo $numCapacity;
            echo "<br>";
            echo $numinscritos;
            
            if($numCapacity>$numinscritos && $resultado == "ok"){
                $resultado = apuntarActividad($_POST["activity"], $_POST["date"],$_POST["idmember"]);
                echo "<p>Usuario inscrito en la actividad.</p>";
   
            } else if ($numCapacity<=$numinscritos) {
                
            echo "<p>No hay plazas disponibles</p>";
            }else {
                echo $msg;
            }
        }
        ?>
         <br>
         <p><a href="socio.php">Apuntarse a otra actividad</a></p>
         <br>
         <h4>Coste mensual del total de las actividades:</h4>
         <?php 
         $sumaPrecios = sumaPreciosActividades($usuario);
         echo $sumaPrecios
                 
         ?>
         <br>
         <p><a href="index.php">Página de inicio</a></p>
    </body>
</html>
