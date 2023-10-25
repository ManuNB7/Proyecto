<?php
    class CrudAnadir extends Main
    {
        /*
         * Añade un nuevo registro de lugar a la base de datos.
         */
        public function añadir($ip, $lugar, $descripcion)
        {
            $this->ip = $ip;
            $this->lugar = $lugar;
            $this->descripcion = $descripcion;

            $sql_insert = "INSERT INTO lugar (ip, lugar, descripcion) VALUES ('$ip', '$lugar', '$descripcion')";
            $resultado_insert = $this->conexion->query($sql_insert);

            if ($resultado_insert) {
                echo "Lugar $lugar agregado.<br>";
            } else {
                // Lanzar una excepción en caso de error
                throw new Exception("Error al agregar Lugar, ya existe ese lugar: " . $this->conexion->error);
            }

            return "Operación Añadir realizada con éxito";
        }
    }
?>
