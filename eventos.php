<?php session_start();
    include './backend/conexion.php';
    include './header.php';
    $idUsuario = $_SESSION['idUsuario'];
    $conexion = conexion();
    $sql = "SELECT * FROM t_eventos 
            WHERE id_usuario = '$idUsuario'";
    $respuesta = mysqli_query($conexion, $sql);
?>

<div class="container">
    <div class="row">
        <div class="col">
            <br><br>
            <?php echo "ID DE USUARIO: " . $_SESSION['idUsuario'];?>
            <br>
            <?php echo "Nombre del usuario: " . $_SESSION['usuario'];?>
            <br><br>
            <a href="./nuevoEvento.php" class="btn btn-primary mt-6">Nuevo Evento</a>
            <a href="./backend/logout.php" class="btn btn-danger mt-6">CERRAR SESION</a>
            <br><br>
            <table class="table table-striped table-hover table-bordered table-sm">
                <thead class="text-center">
                    <tr>
                        <th>ID DEL EVENTO</th>
                        <th>ID DEL USUARIO</th>
                        <th>NOMBRE DEL EVENTO</th>
                        <th>FECHA DEL EVENTO</th>
                        <th>EDITAR</th>
                        <th>ELIMINAR</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <?php
                        while ($ver = mysqli_fetch_array($respuesta)) {
                    ?>
                    <tr>
                        <td><?php echo strtoupper($ver['id_evento']); ?></td>
                        <td><?php echo strtoupper($ver['id_usuario']); ?></td>
                        <td><?php echo strtoupper($ver['fecha_evento']); ?></td>
                        <td><?php echo strtoupper($ver['nombre_evento']); ?></td>
                        <td>
                            <a href="./editarEvento.php?id=<?php echo $ver['id_evento']; ?>" class="btn btn-warning">EDITAR</a>
                        </td>
                        <td>
                            <a href="./backend/eliminarEvento.php?id=<?php echo $ver['id_evento']; ?>" class="btn btn-danger">ELIMINAR</a>
                        </td>
                    </tr>
                    <?php
                        }
                    ?>

                </tbody>
                
        </table>
        </div>
    </div>
</div>

<?php include './footer.php'; ?>