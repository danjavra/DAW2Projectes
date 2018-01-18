<?php

function conectar() {
    $con = mysqli_connect("localhost", "root", "", "gym")
            or die("No se ha podido conectar con la BBDD.");
    return $con;
}

function desconectar($conexion) {
    mysqli_close($conexion);
}

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


function actividades($pos){
    $conectar = conectar("gym");
    $select = "select * from activity limit ".$pos.", 5";
    $resultado = mysqli_query($conectar, $select);
    desconectar($conectar);
    return $resultado;
}


function actividadesDispo($usuario){
    $conectar = conectar("gym");
    $select = "select name from activity where name not in (select activity from enroll where member='$usuario')";
    echo $select;
    $resultado = mysqli_query($conectar, $select);
    desconectar($conectar);
    return $resultado;
}


function totalActividades(){
    $conectar = conectar("gym");
    $select = "select * from activity";
    $resultado = mysqli_query($conectar, $select);
    $rows = mysqli_num_rows($resultado);
    desconectar($conectar);
    return $rows;
}

function socios($pos){
    $conectar = conectar("gym");
    $select = "select * from member limit ".$pos.", 10";
    $resultado = mysqli_query($conectar, $select);
    desconectar($conectar);
    return $resultado;
}

function totalSocios(){
    $conectar = conectar("gym");
    $select = "select * from member";
    $resultado = mysqli_query($conectar, $select);
    $rows = mysqli_num_rows($resultado);
    desconectar($conectar);
    return $rows;
}

function getNameById($idmember){
    $conectar = conectar("gym");
    $select = "select name from member where idmember=$idmember";
    $resultado = mysqli_query($conectar, $select);
    $fila = mysqli_fetch_array($resultado);
    extract($fila);
    desconectar($conectar);
    return $name;
}

function getCapacityName($actividades){
    $conectar = conectar("gym");
    $select = "select capacity from activity where name='$actividades'";
    $resultado = mysqli_query($conectar, $select);
    $fila = mysqli_fetch_array($resultado);
    extract($fila);
    desconectar($conectar);
    return $capacity;
}

function getNumInscritos($actividades){
    $conectar = conectar("gym");
    $select = "select count(*) as numinscritos from enroll where activity='$actividades'";
    $resultado = mysqli_query($conectar, $select);
    $fila = mysqli_fetch_array($resultado);
    extract($fila);
    desconectar($conectar);
    return $numinscritos;
}

function sumaPreciosActividades($idmember){
    $conectar = conectar("gym");
    $select = "select SUM(price) as resultado from activity where name in (select activity from enroll where member=$idmember)";
    $resultado = mysqli_query($conectar, $select);
    $fila = mysqli_fetch_array($resultado);
    extract($fila);
    desconectar($conectar);
    return $resultado;
}