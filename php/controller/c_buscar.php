<?php
    include '../conexion.php';

    if ($id) {
        $query = "SELECT * FROM minijuegos WHERE idMinijuego = $id";
        $resultado = $conexion->query($query);

        if ($resultado->num_rows > 0) {
            $datos_minijuego = $resultado->fetch_assoc();
        }
    }
?>
