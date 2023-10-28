<?php
    class Principal {

        // Constructor de la clase que establece la conexión a la base de datos
        public function __construct() {
            require '../../config/configdb.php';  // Requiere el archivo con las constantes de configuración de la conexión con la base de datos
            $this->conexion = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        }

        // Método para añadir un lugar a la base de datos
        public function añadir($ip, $lugar, $descripcion) {
            $query = "INSERT INTO lugar (ip, lugar, descripcion) VALUES ('$ip', '$lugar', '$descripcion')";
            return $this->conexion->query($query);
        }

        // Método para modificar un lugar en la base de datos
        public function modificar($ip, $lugar, $descripcion) {
            $query = "UPDATE lugar SET lugar = '$lugar', descripcion = '$descripcion' WHERE ip = '$ip'";
            return $this->conexion->query($query);
        }

        // Método para borrar un lugar de la base de datos
        public function borrar($ip) {
            $query = "DELETE FROM lugar WHERE ip = '$ip'";
            return $this->conexion->query($query);
        }

        // Método para listar todos los lugares de la base de datos
        public function listar(){
            $query = "SELECT * FROM lugar";
            $resultado = $this->conexion->query($query);
            $lugares = [];

            foreach ($resultado as $fila) {
                $lugares[] = $fila;
            }

            return $lugares;
        }
    }
?>