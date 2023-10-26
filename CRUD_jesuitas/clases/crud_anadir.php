<?php
    // Clase que extiende de Main para añadir un registro en la base de datos
    class CrudAnadir extends Main
    {
        /*
         * Añade un nuevo registro de jesuita a la base de datos.
         */
        public function añadir($id, $nombre, $firma)
        {
            // Asigna los valores recibidos a las propiedades de la clase heredada (Main)
            $this->id = $id;
            $this->nombre = $nombre;
            $this->firma = $firma;

            // Crea la consulta SQL para insertar un nuevo registro en la tabla 'jesuita'
            $sql_insert = "INSERT INTO jesuita (idJesuita, nombre, firma) VALUES ('$id', '$nombre', '$firma')";

            // Ejecuta la consulta y almacena el resultado
            $resultado_insert = $this->conexion->query($sql_insert);

            // Verifica si la consulta se ejecutó con éxito
            if ($resultado_insert) {
                echo "Jesuita $nombre agregado.<br>";
            } else {
                // En caso de error, lanza un mensaje
                echo "Error al agregar Jesuita, ya existe ese jesuita: " . mysqli_error($this->conexion) . "<br>";
            }

            return "Operación Añadir realizada con éxito"; // Retorna un mensaje indicando el éxito de la operación
        }
    }
?>

