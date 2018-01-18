<html>
    <head>
        <meta charset="UTF-8">
        <title>Registro</title>
    </head>
    <body>
        <h2>REGISTRO</h2>
        <form action="" method="post">
            <p>Nombre: <input type="text" name="name"></p>
            <p>Password: <input type="password" name="pass"></p>
            <p>Edad: <input type="number" min="0" max="100" name="age"></p>
            
            <p><input type="submit" name="reg" value="Registro"</p>
        </form>
        <?php
         
        if (isset($_POST["reg"])) {
            require_once 'bbdd.php';
            $passcif = password_hash( $_POST["pass"], PASSWORD_DEFAULT);
            $resultado = insertUser($_POST["name"],$passcif, $_POST["age"]);
            if ($resultado == "ok") {
                echo "<p>Usuario registrado. Ya puedes iniciar sesión.</p>";
            } else {
                echo $msg;
            }
        }
        ?>
        <p><a href="index.php">Pagina principal</a></p>
    </body>
</html>
