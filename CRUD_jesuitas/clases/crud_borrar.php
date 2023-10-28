<?php
    // Incluye la definición de la clase Principal
    include 'principal.php';

    // Crea una instancia de la clase Principal
    $crud = new Principal();

    // Obtiene el ID del Jesuita a eliminar desde el formulario HTML mediante POST
    $id = $_POST['id'];

    // Utiliza el método borrar de la clase Principal para eliminar el Jesuita
    $resultado = $crud->borrar($id);

    // Imprime un mensaje indicando que el Jesuita ha sido eliminado y muestra el ID del Jesuita eliminado
    echo "--Jesuita eliminado --<br> ID: $id";
?>