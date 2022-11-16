<?php
    include './backend/conexion.php';
    include './header.php';
    $conexion = conexion();
    $id = $_GET['id'];
    $sql = "SELECT * FROM t_eventos WHERE id_evento = '$id'";
    $respuesta = mysqli_query($conexion, $sql);
    $item = mysqli_fetch_array($respuesta);
?>

<div class="container">
    <div class="row">
        <div class="col">
            <br><hr>
            <h2 class="text-center">EDITAR EVENTO</h2>
            <hr>

            <form action="./backend/editarEvento.php" method="post">

                <input type="text" hidden  name ="id_evento" value="<?php echo $id; ?>">

                <br>
                <label for="nombre_evento">NOMBRE DEL EVENTO</label>
                <input type="text" name="nombre_evento" id="nombre_evento" required class="form-control" 
                value="<?php echo $item['nombre_evento']; ?>">

                <br>
                <label for="fecha_evento">FECHA DEL EVENTO</label>
                <input type="date" name="fecha_evento" id="fecha_evento" required class="form-control" value="<?php echo $item['fecha_evento']; ?>">

                <br>
                <button class="btn btn-info mt-6">ACTUALIZAR</button>
                <a href="./eventos.php" class="btn btn-warning mt-6">TABLA EVENTOS</a>
                
            </form>
        </div>
    </div>
</div>
