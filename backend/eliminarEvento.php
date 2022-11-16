<?php session_start();
    include "./conexion.php";
    $conexion = conexion();
    $id = $_GET['id'];


    $sql = "DELETE FROM t_eventos WHERE id_evento = '$id'";
    $respuesta = mysqli_query($conexion, $sql);

    if ($respuesta) {
        header("location:../eventos.php");
    }else {
        echo "No se puede borrar el registro";
    }

?>