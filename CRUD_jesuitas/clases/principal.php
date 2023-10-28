<?php
    class Principal {

        // Constructor que establece la conexión a la base de datos al crear una instancia de la clase
        public function __construct() {
            require '../../config/configdb.php';  // Requiere el archivo con las constantes de configuración de la conexión con la base de datos
            $this->conexion = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        }

        // Método para añadir un nuevo registro a la tabla "jesuita"
        public function añadir($id, $nombre, $firma) {
            $query = "INSERT INTO jesuita (idJesuita, nombre, firma) VALUES ('$id', '$nombre', '$firma')";
            return $this->conexion->query($query);
        }

        // Método para modificar un registro en la tabla "jesuita" basado en el ID
        public function modificar($id, $nombre, $firma) {
            $query = "UPDATE jesuita SET nombre = '$nombre', firma = '$firma' WHERE idJesuita = $id";
            return $this->conexion->query($query);
        }

        // Método para borrar un registro de la tabla "jesuita" basado en el ID
        public function borrar($id) {
            $query = "DELETE FROM jesuita WHERE idJesuita = $id";
            return $this->conexion->query($query);
        }
    }
?>