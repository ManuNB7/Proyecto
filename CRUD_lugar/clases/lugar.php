<?php
    require '../../config/configdb.php';  // Requiere el archivo con las constantes de configuración de la conexión con la base de datos
    include 'crud_anadir.php'; //Inclute el crud para añadir
    include 'crud_modificar.php'; //Inclute el crud para modificar
    include 'crud_borrar.php'; //Inclute el crud para borrar

    // Clase principal que maneja la conexión y el procesamiento de datos
    class Main {
        protected $conexion;

        // Constructor que recibe una conexión a la base de datos
        public function __construct($conexion) {
            $this->conexion = $conexion;
        }

        // Método para procesar los datos recibidos del formulario
        public function procesarDatos() {
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $ip = $_POST['ip']; //Recibe la ip del lugar
                $lugar = isset($_POST['lugar']) ? $_POST['lugar'] : ''; // Recibe los datos del formulario, además comprueba si no se rellenó
                $descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : ''; // Recibe los datos del formulario, además comprueba si no se rellenó
                $opcion = $_POST['opcion']; //Determina que operación realizará el switch

                switch ($opcion) {
                    // Opción sea 1, crea una instancia de CrudAnadir y se llama al método añadir
                    case 1:
                        $crud = new CrudAnadir($this->conexion);
                        $crud->añadir($ip, $lugar, $descripcion);
                        break;
                    // Opción 2, crea una instancia de CrudModificar y se llama al método modificar
                    case 2:
                        $crud = new CrudModificar($this->conexion);
                        $crud->modificar($ip, $lugar, $descripcion);
                        break;
                    // Opción sea 3, se crea una instancia de CrudBorrar y se llama al método borrar
                    case 3:
                        $crud = new CrudBorrar($this->conexion);
                        $crud->borrar($ip);
                        break;
                }
            }
        }
    }

    // Establece la conexión a la base de datos usando los datos del archivo de configuración
    $conexion = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

    // Verifica si hay errores en la conexión
    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

    // Crea una instancia de la clase principal y procesa los datos
    $manejadorCrud = new Main($conexion);
    $manejadorCrud->procesarDatos();

    // Cierra la conexión a la base de datos
    $conexion->close();
?>