<?php
    // Incluye la clase Principal que contiene la lógica para operaciones CRUD en la tabla "lugar"
    include 'principal.php';

    // Crea una instancia del objeto Principal
    $crud = new Principal();

    // Obtiene los datos del formulario
    $ip = $_POST['ip'];
    $lugar = $_POST['lugar'];
    $descripcion = $_POST['descripcion'];

    // Añade el lugar a la base de datos
    $resultado = $crud->añadir($ip, $lugar, $descripcion);

    // Muestra un mensaje indicando que el lugar ha sido añadido
    echo "--Lugar añadido --<br> IP: $ip<br> Nombre del Lugar: $lugar <br> Descripción: $descripcion<br>";
?>