<?php
     class Minijuegos {
        private $conexion;
        public function __construct() {
            $conexionInstancia = new Conexion();
            $this->conexion = $conexionInstancia->conexion;
        }

        // Método para añadir un nuevo registro a la tabla "minijuegos"
        public function añadir($nombre, $url, $descripcion) {
            $query = "INSERT INTO minijuegos (nombre, url_juego, descripcion) VALUES ('$nombre', '$url', '$descripcion')";
            return $this->conexion->query($query);
        }

        // Método para modificar una fila de la tabla "minijuegos" basado en el ID
        public function modificar($id, $nombre, $url, $descripcion) {
            $query = "UPDATE minijuegos SET nombre = '$nombre', url_juego = '$url', descripcion = '$descripcion' WHERE idMinijuego = $id";
            return $this->conexion->query($query);
        }

        // Método para borrar una fila de la tabla "minijuegos" basado en el ID
        public function borrar($id) {
            $query = "DELETE FROM minijuegos WHERE idMinijuego = $id";
            return $this->conexion->query($query);
        }
    }
?>
