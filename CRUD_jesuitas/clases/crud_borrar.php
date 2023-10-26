<?php
    // Clase que extiende de Main para eliminar un registro existente en la base de datos
    class CrudBorrar extends Main
    {
        /*
         * Elimina un registro de jesuita de la base de datos.
         */
        public function borrar($id)
        {
            // Asigna los parámetros recibidos a las propiedades de la clase heredada (Main)
            $this->id = $id;

            // Construye la consulta SQL para eliminar el registro de la tabla jesuita
            $sql_delete = "DELETE FROM jesuita WHERE idJesuita='$this->id'";

            // Ejecuta la consulta SQL y almacena el resultado
            $resultado_delete = $this->conexion->query($sql_delete);

            // Verifica si la eliminación se realizó
            if ($resultado_delete) {
                echo "Jesuita eliminado.<br>";  // Muestra un mensaje de éxito
            } else {
                echo "Error al eliminar Jesuita: " . mysqli_error($this->conexion) . "<br>";  // Muestra un mensaje de error
            }

            return "Operación Borrar realizada con éxito";  // Retorna un mensaje indicando el éxito de la operación
        }
    }
?>