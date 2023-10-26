<?php
    // Clase que extiende de Main para añadir un registro en la base de datos
    class CrudAnadir extends Main
    {
        /*
         * Añade un nuevo registro de lugar a la base de datos.
         */
        public function añadir($ip, $lugar, $descripcion)
        {
            // Asigna los parámetros recibidos a las propiedades de la clase heredada (Main)
            $this->ip = $ip;
            $this->lugar = $lugar;
            $this->descripcion = $descripcion;

            // Construye la consulta SQL para insertar un nuevo registro en la tabla lugar
            $sql_insert = "INSERT INTO lugar (ip, lugar, descripcion) VALUES ('$ip', '$lugar', '$descripcion')";

            // Ejecuta la consulta SQL y almacena el resultado
            $resultado_insert = $this->conexion->query($sql_insert);

            // Verifica si la inserción fue exitosa
            if ($resultado_insert) {
                echo "Lugar $lugar agregado.<br>";  // Muestra un mensaje de éxito
            } else {
                // En caso de error, lanza un mensaje
                echo "Error al agregar Jesuita, ya existe ese jesuita: " . mysqli_error($this->conexion) . "<br>";
            }

            return "Operación Añadir realizada con éxito";  // Retorna un mensaje indicando el éxito de la operación
        }
    }
?>