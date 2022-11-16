<?php session_start();
    include './header.php';
?>
<?php if(isset($_SESSION['usuario'])){
    header('location:./eventos.php');
}
?>


    <div class="container">
        <div class="row">
            <div class="col">
                <form action="./backend/logear.php" method="post">
                    <br><br>    
                    <hr>
                    <h2 class="text-center">LOGIN DE USUARIO</h2>
                    <hr>

                    <br>
                    <label for="user">USUARIO</label>
                    <input type="text" name="user" id="user" required class="form-control">

                    <br>
                    <label for="password">CONTRASEÑA DE USUARIO</label>
                    <input type="password" name="password" id="password" required class="form-control">

                    <br>

                    <button class="btn btn-primary">ENTRAR</button>

                    <a href="./registrar.php" class="btn btn-success">REGISTRAR</a>


                </form>

            </div>
        </div>
    </div>
<?php include './footer.php'; ?>
