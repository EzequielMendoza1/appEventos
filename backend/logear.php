<?php session_start();
    include './conexion.php';
    $conexion = conexion();

    $usuario = $_POST['user'];
    $pass = sha1($_POST['password']);

    $sql = "SELECT * FROM  t_usuario 
    WHERE usuario = '$usuario' 
    AND password = '$pass'";

    $respuesta = mysqli_query($conexion, $sql);

    if (mysqli_num_rows($respuesta)) {
        $_SESSION['usuario'] = $usuario;

        $idUsuario = mysqli_fetch_array($respuesta)['id_usuario'];
        $_SESSION['idUsuario'] = $idUsuario;
        header('location:../eventos.php');
    }else {
        header('location:../index.php');
    }
?>