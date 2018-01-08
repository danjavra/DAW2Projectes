

<html>
    <head>
        

        <meta charset="UTF-8">
        <title>Stucom GYM</title>
        
    </head>
    <body>
         <h1>Página del Administrador</h1>
        
        <h3>Listado de clientes</h3>
        <table style="width:50%; text-align: center;">
            <tr><th>Nº de Socio</th><th>Nombre</th><th>Edad</th></tr>
        <?php
        require_once 'bbdd.php';
        session_start();
        $usuario = $_SESSION["user"];
        $posicion = 0;
        
        $date = date('Y-m-d H:i:s');

        if (isset($_GET["posicion"])) {
            $posicion = $_GET["posicion"];
        } else {
            $posicion = 0;
        }
        $socios = socios($posicion,10);
        $total = totalSocios();
            while($fila = mysqli_fetch_array($socios)){
                extract($fila);
                echo"<tr><td>$idmember</td><td>$name</td><td>$age</td><td>";
            }
            if($posicion>0){
            echo "<a href='admin.php?posicion=".($posicion - 10)."'>prev</a><br>";
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
             </table>
         <p><a href="index.php">Página de inicio</a></p>
    </body>
</html>
