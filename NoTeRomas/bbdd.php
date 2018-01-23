<?php

//Función que conecta a la base de datos para poder hacer las consultas.
function conectar() {
    $con = mysqli_connect("localhost", "root", "", "gym")
            or die("No se ha podido conectar con la BBDD.");
    return $con;
}

//Función que desconecta la pagina de la base de datos.
function desconectar($conexion) {
    mysqli_close($conexion);
}

//Función que registra la id de usuario y la contraseña, hace una consulta en la base de datos si existe en ella y devuelve un resultado booleano.
function loginUser($idmember, $password) {
    $con = conectar("gym");
    $query = "select pass from member where idmember='$idmember'";
    $resultado = mysqli_query($con, $query);
    $filas = mysqli_num_rows($resultado);
    desconectar($con);
    if($filas>0){
        $fila = mysqli_fetch_array($resultado);
        extract($fila);
        return password_verify($password, $pass);
    }
    else{
        return false;
    }
}

//Funcion para registrar nuevos usuarios, inserta los datos que metemos en el formulario.
function insertUser($name, $pass, $age) {
    $conexion = conectar();
    $insert = "insert into member values (null,'$pass', '$name', $age)";
    if (mysqli_query($conexion, $insert)) {
        $msg = "ok";
    } else {
        echo mysqli_error($conexion);
        $msg = "error";
    }
    desconectar($conexion);
    return $msg;
}

//Función que registra las actividades que quiere hacer un usuario insertando los datos que hemos puesto en el formulario y el día en que lo ha hecho.
function apuntarActividad($activity, $date, $idmember){
    $conexion = conectar();
    $insert = "insert into enroll values ($idmember,'$activity','$date' )";
    if (mysqli_query($conexion, $insert)) {
        $msg = "ok";
    } else {
        echo mysqli_error($conexion);
        $msg = "error";
    }
    desconectar($conexion);
    return $msg;
}

//Función para listar, muestra los demás contenidos a partir de la posición que le hemos predefinido hasta el limite que le hemos impuesto.
function actividades($pos){
    $conectar = conectar("gym");
    $select = "select * from activity limit ".$pos.", 5";
    $resultado = mysqli_query($conectar, $select);
    desconectar($conectar);
    return $resultado;
}

//Función que muestra las actividades en las que el usuario no se ha apuntado, compara la tabla activity y la tabla member mostrando solo los valores en las que no conste la idmember que le decimos
function actividadesDispo($usuario){
    $conectar = conectar("gym");
    $select = "select name from activity where name not in (select activity from enroll where member='$usuario')";
    echo $select;
    $resultado = mysqli_query($conectar, $select);
    desconectar($conectar);
    return $resultado;
}

//Función que muestra todo el contenido de la tabla activity
function totalActividades(){
    $conectar = conectar("gym");
    $select = "select * from activity";
    $resultado = mysqli_query($conectar, $select);
    $rows = mysqli_num_rows($resultado);
    desconectar($conectar);
    return $rows;
}

//Función para listar, muestra los demás contenidos a partir de la posición que le hemos predefinido hasta el limite que le hemos impuesto.
function socios($pos){
    $conectar = conectar("gym");
    $select = "select * from member limit ".$pos.", 10";
    $resultado = mysqli_query($conectar, $select);
    desconectar($conectar);
    return $resultado;
}

//Función que muestra todo el contenido de la tabla member
function totalSocios(){
    $conectar = conectar("gym");
    $select = "select * from member";
    $resultado = mysqli_query($conectar, $select);
    $rows = mysqli_num_rows($resultado);
    desconectar($conectar);
    return $rows;
}

//Funcion que muestra el nombre a partir de la idmember que le pasamos
function getNameById($idmember){
    $conectar = conectar("gym");
    $select = "select name from member where idmember=$idmember";
    $resultado = mysqli_query($conectar, $select);
    $fila = mysqli_fetch_array($resultado);
    extract($fila);
    desconectar($conectar);
    return $name;
}

//Función que muestra el numero máximo de alumnos que se puedan apuntar a la actividad seleccionada
function getCapacityName($actividades){
    $conectar = conectar("gym");
    $select = "select capacity from activity where name='$actividades'";
    $resultado = mysqli_query($conectar, $select);
    $fila = mysqli_fetch_array($resultado);
    extract($fila);
    desconectar($conectar);
    return $capacity;
}

//Función que muestra el numero total de inscritos que estan apuntados a la actividad seleccionada
function getNumInscritos($actividades){
    $conectar = conectar("gym");
    $select = "select count(*) as numinscritos from enroll where activity='$actividades'";
    $resultado = mysqli_query($conectar, $select);
    $fila = mysqli_fetch_array($resultado);
    extract($fila);
    desconectar($conectar);
    return $numinscritos;
}

//Función que suma las cantidades a pagar de las actividades en las que se ha registrado el usuario, buscando si el nombre de la actividad consta en la tabla enroll y va asociado a la idmember del usario
function sumaPreciosActividades($idmember){
    $conectar = conectar("gym");
    $select = "select SUM(price) as resultado from activity where name in (select activity from enroll where member=$idmember)";
    $resultado = mysqli_query($conectar, $select);
    $fila = mysqli_fetch_array($resultado);
    extract($fila);
    desconectar($conectar);
    return $resultado;
}