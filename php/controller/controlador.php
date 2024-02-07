<?php
    require_once '../php/models/modelo.php';
    
    class Controlador {
        private $modelo;
        private $vista;

        public function __construct($modelo, $vista) {
            $this->modelo = $modelo;
            $this->vista = $vista;
        }

        public function añadirMinijuego($nombre, $descripcion, $url) {
            
            $resultado = $this->modelo->añadir($nombre, $descripcion, $url);

            if ($resultado) {
                $mensaje = "Minijuego añadido con éxito<br>Nombre: $nombre<br> Url: $url<br> Descripcion: $descripcion<br>";
            } else {
                $mensaje = "Error al añadir el minijuego.";
            }

            $this->vista->mostrarMensaje($mensaje);
        }

        public function borrarMinijuego($id) {
            $resultado = $this->modelo->borrar($id);

            if ($resultado) {
                $mensaje = "Minijuego eliminado <br> ID: $id";
            } else {
                $mensaje = "Error al eliminar el minijuego.";
            }

            $this->vista->mostrarMensaje($mensaje);
        }

        public function modificarMinijuego($nombre, $descripcion, $url) {
            $resultado = $this->modelo->modificar($nombre, $url, $descripcion);

            if ($resultado) {
                $mensaje = "-- Minijuego modificado --<br> Nombre: $nombre <br> Descripcion: $descripcion <br> Url: $url<br>";
            } else {
                $mensaje = "Error al modificar el Minijuego.";
            }

            $this->vista->mostrarMensaje($mensaje);
        }
    }
?>
