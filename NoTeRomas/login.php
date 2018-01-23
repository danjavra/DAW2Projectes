<html>
    <head>
        <meta charset="UTF-8">
        <title>Bienvenido a NoTeRomas Gym</title>
    </head>
    
    <body>
       
        <h2>LOGIN</h2>
        <form action="" method="post">
            <p>Nº usuario: <input type="text" name="usuario" required></p>
            <p>Password: <input type="password" name="pass"></p>
            <p><input type="submit" name="login" value="Acceder"></p>
        </form>
         <!-- Invocamos la base de datod bbdd.php, registramos el usuario con session, desciframos el password que hemos cifrado en el registro con el hash utilizando la funcion verify
         y ponemos las condiciones para que si al escribir numuser sea 0 y con pasword admin redirija la pagina a la pagina de admin, y si no a la de socio, tambien definiremosun mensaje de error
         en caso de contrasenyas o id incorrectas-->
        <?php
        session_start();
        require_once 'bbdd.php';
        if (isset($_POST["login"])) {
            $passwordcif = password_hash($_POST["pass"], PASSWORD_DEFAULT);
            $passwordVerify = password_verify($_POST["pass"],$passwordcif);
            $numuser = $_POST["usuario"];
           
            if($numuser==0 && $_POST["pass"]=="admin"){
                     header("Location: admin.php");
                 }
            
            if (loginUser($_POST["usuario"], $_POST["pass"] )) {
                $_SESSION["user"] = $_POST["usuario"];
                $_SESSION["tipo"] = $tipo;
                if($numuser>=0){
                header("Location: socio.php");
                 } 
            } else {
                echo "<p>Usuario o password incorrecto. </p>";
            }
        }
        ?>
         <!--Link que devuelve a la pagina de inicio-->
        <p><a href="index.php">Página de inicio</a></p>
        
        
    </body>
</html>
