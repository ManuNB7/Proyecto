<?php
class Principal {

    // Constructor que establece la conexión a la base de datos al crear una instancia de la clase
    public function __construct() {
        require '../../config/configdb.php';  // Requiere el archivo con las constantes de configuración de la conexión con la base de datos
        $this->conexion = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    }

    // Método para añadir una visita a la base de datos.
    public function añadir($idVisita, $idJesuita, $ip, $fechaHora) {
        $query = "INSERT INTO visita (idVisita, idJesuita, ip, fechaHora) VALUES ('$idVisita', '$idJesuita', '$ip', '$fechaHora')";
        return $this->conexion->query($query);
    }

    // Método para obtener y retornar todas las visitas de la base de datos.
    public function listar(){
        $query = "SELECT * FROM visita";
        $resultado = $this->conexion->query($query);
        $visitas = [];

        // Itera sobre el resultado y guarda cada fila en el arreglo $visitas.
        foreach ($resultado as $fila) {
            $visitas[] = $fila;
        }

        return $visitas; // Retorna el arreglo con las visitas.
    }
}
?>