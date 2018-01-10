<?php

function conectar() {
    $con = mysqli_connect("localhost", "root", "", "gym")
            or die("No se ha podido conectar con la BBDD.");
    return $con;
}

function desconectar($conexion) {
    mysqli_close($conexion);
}

function loginUser($name, $password) {
    $con = conectar("gym");
    $query = "select pass from member where name='$name'";
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

function insertUser($name, $pass, $age, $type) {
    $conexion = conectar();
    $insert = "insert into member values (null,'$pass', '$name', $age, 0)";
    if (mysqli_query($conexion, $insert)) {
        $msg = "ok";
    } else {
        echo mysqli_error($conexion);
        $msg = "error";
    }
    desconectar($conexion);
    return $msg;
}

function selectTypeUser($username){
    $conectar = conectar("gym");
    $select = "select tipo from member where name='$username'";
    $resultado = mysqli_query($conectar, $select);
    $fila = mysqli_fetch_array($resultado);
    extract($fila);
    desconectar($conectar);
    return $tipo;
}

function actividades($pos){
    $conectar = conectar("gym");
    $select = "select * from activity limit ".$pos.", 5";
    $resultado = mysqli_query($conectar, $select);
    desconectar($conectar);
    return $resultado;
}

function actividadesDispo(){
    $conectar = conectar("gym");
    $select = "select * from activity";
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

function getIdByName($usuario){
    $conectar = conectar("gym");
    $select = "select idmember from member where name='$usuario'";
    $resultado = mysqli_query($conectar, $select);
    $fila = mysqli_fetch_array($resultado);
    extract($fila);
    desconectar($conectar);
    return $idmember;
}