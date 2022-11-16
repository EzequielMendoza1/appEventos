<?php include './header.php';
?>

    <div class="container">
        <div class="row">
            <div class="col">
                <form action="./backend/crearUsuario.php" method="post">
                    <br><br>    
                    <hr>
                    <h2 class="text-center">CREAR NUEVO USUARIO</h2>
                    <hr>

                    <br>
                    <label for="user">USUARIO</label>
                    <input type="text" name="user" id="user" class="form-control">

                    <br>
                    <label for="password">CONTRASEÑA DE USUARIO</label>
                    <input type="password" name="password" id="password" class="form-control">

                    <br>

                    <button class="btn btn-primary">AGREGAR</button>
                    <a href="./index.php" class="btn btn-warning">REGRESAR</a>


                </form>

            </div>
        </div>
    </div>
<?php include './footer.php'; ?>