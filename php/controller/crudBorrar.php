<?php
    // Incluye la definición de la clase minijuegos
    include 'minijuegos.php';
    include '../conexion.php';
   
    // Crea una instancia de la clase minijuegos
    $conexion = new Conexion();
    $crud = new Minijuegos();

    $id = $_POST['idMinijuego'];

    // Utiliza el método borrar de la clase main para eliminar el Jesuita
    $resultado = $crud->borrar($id);
?>
