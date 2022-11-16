<?php 
    function conexion(){
        return mysqli_connect(
            'localhost',
            'ezequielmendoza',
            'EzeMen02Amk',
            'login_eventos',
            3306
        );
    }
?>