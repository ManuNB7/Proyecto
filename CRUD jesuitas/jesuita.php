<?php
    include 'crud_anadir.php';
    include 'crud_modificar.php';
    include 'crud_borrar.php';

    class Main {
        protected $conexion;

        public function __construct($conexion) {
            $this->conexion = $conexion;
        }

        public function procesarDatos() {
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $id = $_POST['id'];
                $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
                $firma = isset($_POST['firma']) ? $_POST['firma'] : '';
                $opcion = $_POST['opcion'];

                switch ($opcion) {
                    case 1:
                        $crud = new CrudAnadir($this->conexion);
                        $crud->añadir($id, $nombre, $firma);
                        break;
                    case 2:
                        $crud = new CrudModificar($this->conexion);
                        $crud->modificar($id, $nombre, $firma);
                        break;
                    case 3:
                        $crud = new CrudBorrar($this->conexion);
                        $crud->borrar($id);
                        break;
                }
            }
        }

    }

    $conexion = new mysqli("localhost", "root", "", 'jesuitas');

    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

    $manejadorCrud = new Main($conexion);
    $manejadorCrud->procesarDatos();

    $conexion->close();
?>