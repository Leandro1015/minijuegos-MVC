<?php
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];   
    $url = $_POST['url'];

    // Llama al método añadir de la clase minijuegos
    $resultado = $crud->añadir($nombre, $descripcion, $url);
?>
