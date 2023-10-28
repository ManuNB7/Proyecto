<?php
    // Incluye el archivo que contiene la definición de la clase Principal.
    include 'principal.php';

    // Crea una instancia de la clase Principal.
    $crud = new Principal();

    // Obtiene los datos de la visita del formulario enviado por POST.
    $idVisita = $_POST['idVisita'];
    $idJesuita = $_POST['idJesuita'];
    $ip = $_POST['ip'];
    $fechaHora = $_POST['fechaHora'];

    // Llama al método añadir de la instancia de la clase Principal para agregar la visita a la base de datos.
    $resultado = $crud->añadir($idVisita, $idJesuita, $ip, $fechaHora);

    // Muestra un mensaje indicando que la visita ha sido añadida con éxito.
    echo "--Visita añadida --<br> id Visita: $idVisita<br> id Jesuita: $idJesuita <br> IP: $ip<br> Fecha/hora: $fechaHora";
?>