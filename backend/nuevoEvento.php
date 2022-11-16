<?php session_start();
    include './conexion.php';
    $conexion = conexion();

    $idUsuario = $_SESSION['idUsuario'];
    $fechaEvento = $_POST['fecha_evento'];
    $nombreEvento = $_POST['nombre_evento'];

    $sql = "INSERT INTO t_eventos (id_usuario, fecha_evento, nombre_evento) 
            VALUES('$idUsuario', '$fechaEvento', '$nombreEvento')";

    $respuesta = mysqli_query($conexion, $sql);

    if ($respuesta) {
        header('location:../eventos.php');
    }else {
        echo 'No se pudo agregar:(';
    }

?>