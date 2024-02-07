<?php
/**
 * Clase de conexión a la base de datos.
 */
    class Conexion
    {
        public $conexion;

        /**
         * Constructor de la clase, establece la conexión a la base de datos.
         */
        public function __construct()
        {
            require_once '../php/config/configDB.php';

            // Establecer la conexión a la base de datos
            $this->conexion = new mysqli(HOST, USER, PSW, BDD);
            $this->conexion->set_charset("utf8");
        }     
    }
?>