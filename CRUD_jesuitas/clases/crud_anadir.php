<?php
    // Incluye la definición de la clase Principal
    include 'principal.php';

    // Crea una instancia de la clase Principal
    $crud = new Principal();

    // Obtiene los datos del formulario HTML mediante POST
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $firma = $_POST['firma'];

    // Añade un nuevo registro a la tabla "jesuita" utilizando el método añadir de la clase Principal
    $resultado = $crud->añadir($id, $nombre, $firma);

    // Imprime un mensaje de éxito y muestra los detalles del Jesuita añadido
    echo "--Jesuita añadido --<br> ID: $id<br> Nombre: $nombre <br> Firma: $firma<br>";
?>
