

<html>
    <head>
        

        <meta charset="UTF-8">
        <title>Stucom GYM</title>
        <style>a{margin: 0 10px}</style>
    </head>
    <body>
         <h1>Página del Administrador</h1>
        
        <h3>Listado de clientes</h3>
        <table style="width:50%; text-align: center;">
            <tr><th>Nº de Socio</th><th>Nombre</th><th>Edad</th></tr>
        <?php
        //Con session registramos el usuario que accede a la pagina.
        require_once 'bbdd.php';
        session_start();
        $posicion = 0;
        //Para poder listar los socios, definimos una variable posición que la inicializamos a 0, después creamos dos variables
        //que ejecutan consultas sobre la tabla member, uno con el total y la otra con una posicion determinada.
        if (isset($_GET["posicion"])) {
            $posicion = $_GET["posicion"];
        } else {
            $posicion = 0;
        }
        $socios = socios($posicion);
        $total = totalSocios();
        
        while($fila = mysqli_fetch_array($socios)){
            extract($fila);
            echo"<tr><td>$idmember</td><td>$name</td><td>$age</td><td>";
        }
        
        ?>
            </table>
            <br>
            <div>
                <?php
        if($posicion>0){  
            echo "<a href='admin.php?posicion=".($posicion - 10)."'>prev</a>";
        }
        
        if($posicion + 10 <=$total){
            echo "Mostrando " . ($posicion + 1) . " al " . ($posicion + 10) . " de $total ";
        }
        else {
            echo "Mostrando " . ($posicion + 1) . " al $total de $total";
        }
        
        if ($posicion + 10 < $total) {
            echo "<a href='admin.php?posicion=" .($posicion + 10)."'>next</a>";
        }     
                ?>    
            </div>
         <!--Link que te envia a la pagina de inicio-->
         <p><a href="index.php">Página de inicio</a></p>
    </body>
</html>
