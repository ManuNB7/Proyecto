<?php
    class CrudModificar extends Main
    {
        /*
         * Modifica un registro existente de lugar en la base de datos.
         */
        public function modificar($ip, $lugar, $descripcion)
        {
            $this->ip = $ip;
            $this->lugar = $lugar;
            $this->descripcion = $descripcion;

            $sql_update = "UPDATE lugar SET lugar='$this->lugar', descripcion='$this->descripcion' WHERE ip='$this->ip'";
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
