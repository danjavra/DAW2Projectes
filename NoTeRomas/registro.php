<html>
    <head>
        <meta charset="UTF-8">
        <title>Registro</title>
    </head>
    <body>
        <h2>REGISTRO</h2>
        <!--Creamos un formulario para poder registrar los datos que pedimos-->
        <form action="" method="post">
            <p>Nombre: <input type="text" name="name"></p>
            <p>Password: <input type="password" name="pass"></p>
            <p>Edad: <input type="number" min="0" max="100" name="age"></p>
            
            <p><input type="submit" name="reg" value="Registro"</p>
        </form>
        <?php
         
        if (isset($_POST["reg"])) {
        //definimos que base de datos hacemos la consulta
            require_once 'bbdd.php';
            //Código que cifra el password y después invocamos la función que registra usuarios
            $passcif = password_hash( $_POST["pass"], PASSWORD_DEFAULT);
            $resultado = insertUser($_POST["name"],$passcif, $_POST["age"]);
            if ($resultado == "ok") {
                echo "<p>Usuario registrado. Ya puedes iniciar sesión.</p>";
            } else {
                echo $msg;
            }
        }
        ?>
        <!--Link que te envia a la pagina de inicio-->
        <p><a href="index.php">Pagina principal</a></p>
    </body>
</html>
