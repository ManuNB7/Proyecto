<?php
    // Incluye la clase Principal que contiene la lógica para operaciones CRUD en la tabla "lugar"
    include 'principal.php';

    // Crea una instancia del objeto Principal
    $crud= new Principal();

    // Obtiene los datos del formulario
    $ip= $_POST['ip'];

    // Elimina el lugar de la base de datos
    $resultado = $crud->borrar($ip);

    // Muestra un mensaje indicando que el lugar ha sido eliminado
    echo "--Lugar eliminado --<br> ID: $ip";
?>