<?php
    class Modelo {
        private $modelo;
        private $vista;

        /**
         * Constructor de la clase.
         */
        public function __construct() {
            $this->modelo = new Modelo(new Conexion());
        }

        /**
         * Muestra la vista para agregar un minijuego.
         */
        public function agregar() {
        
            $this->vista->mostrarAgregar();
        }

        /**
         * Muestra la vista para modificar un minijuego.
         */
        public function modificar() {
        
            $this->vista->mostrarModificar();
        }

        /**
         * Muestra la vista para eliminar un minijuego.
         */
        public function eliminar() {
    
            $this->vista->mostrarEliminar();
        }

    }
?>
