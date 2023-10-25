<?php
    class CrudBorrar extends Main
    {
        /*
         * Elimina un registro de jesuita de la base de datos.
         */
        public function borrar($id)
        {
            $this->id = $id;

            $sql_delete = "DELETE FROM jesuita WHERE idJesuita='$this->id'";
            $resultado_delete = $this->conexion->query($sql_delete);

            if ($resultado_delete) {
                echo "Jesuita eliminado.<br>";
            } else {
                echo "Error al eliminar Jesuita: " . mysqli_error($this->conexion) . "<br>";
            }

            return "Operación Borrar realizada con éxito";
        }
    }
?>