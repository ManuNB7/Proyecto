<?php
    // Clase que extiende de Main para gestionar la eliminación de registros de lugar en la base de datos
    class CrudBorrar extends Main
    {
        /*
         * Elimina un registro de lugar de la base de datos.
         */
        public function borrar($ip)
        {
            // Asigna los parámetros recibidos a las propiedades de la clase heredada (Main)
            $this->ip = $ip;

            // Construye la consulta SQL para eliminar el registro en la tabla lugar
            $sql_delete = "DELETE FROM lugar WHERE ip='$this->ip'";

            // Ejecuta la consulta SQL y almacena el resultado
            $resultado_delete = $this->conexion->query($sql_delete);

            // Verifica si la eliminación fue exitosa
            if ($resultado_delete) {
                echo "Lugar eliminado.<br>";  // Muestra un mensaje de éxito
            } else {
                echo "Error al eliminar Lugar: " . mysqli_error($this->conexion) . "<br>";  // Muestra un mensaje de error
            }

            return "Operación Borrar realizada con éxito";  // Retorna un mensaje indicando el éxito de la operación
        }
    }
?>