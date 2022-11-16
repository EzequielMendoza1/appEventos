<?php
    include './header.php';
?>

<div class="container">
    <div class="row">
        <div class="col">
            <br><hr>
            <h2 class="text-center">NUEVO EVENTO</h2>
            <hr>

            <form action="./backend/nuevoEvento.php" method="post">
                <br>
                <label for="nombre_evento">NOMBRE DEL EVENTO</label>
                <input type="text" name="nombre_evento" id="nombre_evento" required class="form-control">

                <br>
                <label for="fecha_evento">FECHA DEL EVENTO</label>
                <input type="date" name="fecha_evento" id="fecha_evento" required class="form-control">

                <br>
                <button class="btn btn-info mt-6">REGISTRAR</button>
                <a href="./eventos.php" class="btn btn-warning mt-6">TABLA EVENTOS</a>
                <a href="" class="btn btn-danger mt-6">CERRAR CESIÓN</a>
            </form>
        </div>
    </div>
</div>

<?php include './footer.php'; ?>