<?php
    // Incluye la clase Principal que contiene la lógica para operaciones CRUD en la tabla "lugar"
    include 'principal.php';

    // Crea una instancia del objeto Principal
    $crud = new Principal();

    // Obtiene los datos del formulario
    $ip = $_POST['ip'];
    $lugar = $_POST['lugar'];
    $descripcion = $_POST['descripcion'];

    // Modifica el lugar en la base de datos
    $resultado = $crud->modificar($ip, $lugar, $descripcion);

    // Muestra un mensaje indicando que el lugar ha sido modificado
    echo "--Lugar modificar --<br> IP: $ip<br> Nombre del Lugar: $lugar <br> Descripción: $descripcion<br>";
?>