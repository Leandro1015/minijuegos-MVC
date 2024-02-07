<?php
    // Incluye la definición de la clase minijuegos
    include 'minijuegos.php';
    include '../conexion.php';

    // Crea una instancia de la clase minijuegos
    $crud = new Minijuegos();

    // Obtiene los datos del formulario HTML mediante POST
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];   
    $url = $_POST['url'];

    // Modifica el registro en la tabla "minijuegos" utilizando el método modificar de la clase minijuegos
    $resultado = $crud->modificar($id, $nombre, $url, $descripcion);

?>
