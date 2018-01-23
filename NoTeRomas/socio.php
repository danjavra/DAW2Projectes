<html>
    <head>
        <meta charset="UTF-8">
        <title>Stucom GYM</title>
        <style>a{margin: 0 10px}</style>
    </head>
    <body>
    <!-- Invocamos la base de datod bbdd.php, registramos el usuario con session, declaramos la variable idmember 
        que la obtenemos del session[user], para que nos muestre el nombre del usuario definimos una funcion que con 
        el idmember haga una consulta a la tabla member para obtener el campo nombre i registramos tambien el dia 
        con la varia blae date.-->
        <?php
        require_once 'bbdd.php';
        session_start();
        $idmember=$_SESSION["user"];
        $username = getNameById($idmember);
        $date = date('Y-m-d H:i:s');
        ?>
        <h1>Página del Socio</h1>
        <!--ucfirst convierte el primer caracter del string en mayuscula-->
        <h2>Bienvenido <?php echo ucfirst($username); ?></h2>
        
             <h3>Inscribirse a una actividad</h3>
             <form action="" method="post">
            <!--  para que en las opciones del select nos muestre las actividades deberemos introducir una funcion con una
             consulta a la tabla activity que tenga una subconsulta a la tabla enroll para que se muestren solo las actividades 
             en las que el usuario aun no se ha registrado-->
                       <p>Actividad:</p>
                       <select type="select" name="activity">
                <?php  $actividadesDisp = actividadesDispo($idmember);
                
                while($fila = mysqli_fetch_array($actividadesDisp)){
                extract($fila);
                echo" <option value='$name'>$name</opcion>";
            } ?>
                   </select>
        <!-- en este input oculto registro la fecha para que la podamos entrar en la base de datos a la hora de registrar-->
            <p><input type="hidden" name="date" value="<?php echo $date ?>"></p> 
            <p><input type="submit" name="enroll" value="Apuntarse"</p>
        </form>
              <?php
        if (isset($_POST["enroll"])) {
            //definimos las variables numCapacity y numinscritos, para poder comparar el numero maximo de plazas de una actividad
            //y el numero de inscritos, de esta manera podemos poner condiociones como que si supera el numero de inscritos al numero maximo 
            //que no se puedan inscribir a la actividad
            $numCapacity = getCapacityName($_POST["activity"]);
            $numinscritos = getNumInscritos($_POST["activity"]);
  
            if($numCapacity>$numinscritos){
                $resultado = apuntarActividad($_POST["activity"], $_POST["date"],$idmember);
                echo "<p>Usuario inscrito en la actividad.</p>";
                
            } else if ($numCapacity<=$numinscritos) {
                
            echo "<p>No hay plazas disponibles</p>";
            }else {
                echo $msg;
            }
        }
        ?>
        <!--Este link lo ponemos para que se refresque la pagina y así se quite las actividades en las que estamos ya apuntados de la lista-->
         <br>
         <p><a href="socio.php">Apuntarse a otra actividad</a></p>
         <br>
            <?php 
         //Una vez apuntados a la actividad definimos la variable sumaPrecios para que tenga una funcion que consulte el precio de las actividades en las
         //que esta apuntado y que sume dichas cantidades para mostrar el preio a pagar al mes.   
         $sumaPrecios = sumaPreciosActividades($idmember);
         ?>
         <p>Coste mensual del total de las actividades:</p> <h4><?php echo $sumaPrecios ?> €/mes</h4>
        <!--Link que devuelve a la pagina de inicio-->
         <br>
         <p><a href="index.php">Página de inicio</a></p>
    </body>
</html>
