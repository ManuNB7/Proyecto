<?php
    include 'principal.php';

    $lugares= new Principal();

    $ip= $_GET['ip'];
    $resultado = $lugares->borrar($ip);
    echo "--Lugar eliminado --<br> ID: $ip";

    // Redirecciona a la página "index_lugar.html" después de 5 segundos
    header('Refresh: 5; URL=../vistas/modificar_borrar.php');
?>