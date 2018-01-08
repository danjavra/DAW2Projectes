<html>
    <head>
        <meta charset="UTF-8">
        <title>Bienvenido a NoTeRomas Gym</title>
    </head>
    
    <body>
       
        <h2>LOGIN</h2>
        <form action="" method="post">
            <p>Usuario: <input type="text" name="usuario" required></p>
            <p>Password: <input type="password" name="pass"></p>
            <p><input type="submit" name="login" value="Acceder"></p>
        </form>
        <?php
        session_start();
        require_once 'bbdd.php';
        if (isset($_POST["login"])) {
            $passwordcif = password_hash($_POST["pass"], PASSWORD_DEFAULT);
            $passwordVerify = password_verify($_POST["pass"],$passwordcif);
            $username = $_POST["usuario"];
            $date = date('Y-m-d H:i:s');
            $tipo = selectTypeUser($username);
            
            if (loginUser($_POST["usuario"], $_POST["pass"] )) {
                $_SESSION["user"] = $_POST["usuario"];
                $_SESSION["tipo"] = $tipo;
                if($tipo>=0){
                header("Location: socio.php");
                 } if($tipo==0 && $_POST["pass"]=="admin"){
                     header("Location: admin.php");
                 }
            } else {
                echo "<p>Usuario o password incorrecto. </p>";
            }
        }
        ?>
        <p><a href="index.php">Página de inicio</a></p>
        
        
    </body>
</html>
