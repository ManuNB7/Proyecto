<?php
    // Clase que extiende de Main para modificar un registro existente en la base de datos
    class CrudModificar extends Main
    {
        /*
         * Modifica un registro existente de lugar en la base de datos.
         */
        public function modificar($ip, $nombre, $descripcion)
        {
            // Asigna los parámetros recibidos a las propiedades de la clase heredada (Main)
            $this->ip = $ip;
            $this->nombre = $nombre;
            $this->descripcion = $descripcion;

            // Construye la consulta SQL para actualizar el registro en la tabla lugar
            $sql_update = "UPDATE lugar SET lugar='$this->nombre', descripcion='$this->descripcion' WHERE ip='$this->ip'";

            // Ejecuta la consulta SQL y almacena el resultado
            $resultado_update = $this->conexion->query($sql_update);

            // Verifica si la actualización fue exitosa
            if ($resultado_update) {
                echo "Lugar modificado.<br>";  // Muestra un mensaje de éxito
            } else {
                echo "Error al modificar Lugar: " . mysqli_error($this->conexion) . "<br>";  // Muestra un mensaje de error
            }

            return "Operación Modificar realizada con éxito";  // Retorna un mensaje indicando el éxito de la operación
        }
    }
?>