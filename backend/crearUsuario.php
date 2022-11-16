<?php
    include './conexion.php';
    $conexion = conexion();

    $usuario = $_POST['user'];
    $pass = sha1($_POST['password']);

    $sql = "INSERT INTO t_usuario (usuario, password) 
            VALUES ('$usuario', '$pass')";
    
    $respuesta = mysqli_query($conexion, $sql);

    if ($respuesta) {
        header ('location:../index.php');
    }else {
        echo 'No se pudo registrar :(';
    }   
?>