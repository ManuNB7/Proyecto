<?php
    // Incluye la definición de la clase Principal
    include 'principal.php';

    // Crea una instancia de la clase Principal
    $crud = new Principal();

    // Obtiene los datos del formulario HTML mediante POST
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $firma = $_POST['firma'];

    // Modifica el registro en la tabla "jesuita" utilizando el método modificar de la clase Principal
    $resultado = $crud->modificar($id, $nombre, $firma);

    // Imprime un mensaje de éxito y muestra los detalles del Jesuita modificado
    echo "--Jesuita modificado --<br> ID: $id<br> Nombre: $nombre <br> Firma: $firma<br>";
?>