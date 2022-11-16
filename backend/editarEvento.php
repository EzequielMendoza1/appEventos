<?php session_start();
    include "./conexion.php";
    $conexion = conexion();
    $id = $_POST['id_evento'];
    $nombreEvento  = $_POST['nombre_evento'];
    $fecha_evento = $_POST['fecha_evento'];
    $sql = "UPDATE t_eventos 
            SET nombre_evento = '$nombreEvento',
                fecha_evento = '$fecha_evento' 
            WHERE id_evento = '$id'";
    $respuesta = mysqli_query($conexion, $sql);
    if ($respuesta){
        header ('location:../index.php');
    }else{
        echo 'No se pudo :(';
    }
?>