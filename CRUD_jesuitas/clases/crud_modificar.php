<?php
    // Clase que extiende de Main para modificar un registro existente en la base de datos
    class CrudModificar extends Main
    {
        /*
         * Modifica un registro existente de jesuita en la base de datos.
         */
        public function modificar($id, $nombre, $firma)
        {
            // Asigna los parámetros recibidos a las propiedades de la clase heredada (Main)
            $this->id = $id;
            $this->nombre = $nombre;
            $this->firma = $firma;

            // Construye la consulta SQL para actualizar el registro en la tabla jesuita
            $sql_update = "UPDATE jesuita SET nombre='$this->nombre', firma='$this->firma' WHERE idJesuita='$this->id'";

            // Ejecuta la consulta SQL y almacena el resultado
            $resultado_update = $this->conexion->query($sql_update);

            // Verifica si la actualización se realizó
            if ($resultado_update) {
                echo "Jesuita modificado.<br>";  // Muestra un mensaje de éxito
            } else {
                echo "Error al modificar Jesuita: " . mysqli_error($this->conexion) . "<br>";  // Muestra un mensaje de error
            }

            return "Operación Modificar realizada con éxito";  // Retorna un mensaje indicando el éxito de la operación
        }
    }
?>