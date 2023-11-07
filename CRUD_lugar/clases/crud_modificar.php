<?php
    include 'principal.php';
    // Crear una instancia de la clase Lugar
    $lugares = new Principal();

    // Verificar si se ha enviado el formulario
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        $ip = $_GET['ip'];
        $lugar = $_GET['lugar'];
        $descripcion = $_GET['descripcion'];

        $query = "UPDATE lugar SET lugar = '$lugar', descripcion = '$descripcion' WHERE ip = '$ip'";


        // Modificar el lugar en la base de datos
        $lugares->modificar($ip, $lugar, $descripcion);
        // Muestra un mensaje indicando que el lugar ha sido modificado
        echo "--Lugar modificar --<br> IP: $ip<br> lugar del Lugar: $lugar <br> Descripción: $descripcion<br>";
        // Redirecciona a la página "index_lugar.html" después de 5 segundos
        header('Refresh: 5; URL=../vistas/modificar_borrar.php');
        exit();
    }
?>