<?php
    class CrudModificar extends Main
    {
        /*
         * Modifica un registro existente de lugar en la base de datos.
         */
        public function modificar($ip, $nombre, $descripcion)
        {
            $this->ip = $ip;
            $this->nombre = $nombre;
            $this->descripcion = $descripcion;

            // Escapar las variables para prevenir la inyección SQL
            $nombre = mysqli_real_escape_string($this->conexion, $this->nombre);
            $descripcion = mysqli_real_escape_string($this->conexion, $this->descripcion);

            $sql_update = "UPDATE lugar SET lugar='$nombre', descripcion='$descripcion' WHERE ip='$this->ip'";
            $resultado_update = $this->conexion->query($sql_update);

            if ($resultado_update) {
                echo "Lugar modificado.<br>";
            } else {
                echo "Error al modificar Lugar: " . mysqli_error($this->conexion) . "<br>";
            }

            return "Operación Modificar realizada con éxito";
        }
    }
?>
