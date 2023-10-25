<?php
    class CrudBorrar extends Main
    {
        /*
         * Elimina un registro de lugar de la base de datos.
         */
        public function borrar($ip)
        {
            $this->ip = $ip;

            $sql_delete = "DELETE FROM lugar WHERE ip='$this->ip'";
            $resultado_delete = $this->conexion->query($sql_delete);

            if ($resultado_delete) {
                echo "Lugar eliminado.<br>";
            } else {
                echo "Error al eliminar Lugar: " . mysqli_error($this->conexion) . "<br>";
            }

            return "Operación Borrar realizada con éxito";
        }
    }
?>
