<?php
    // Incluye la clase Principal que contiene la lógica para operaciones CRUD en la tabla "lugar"
    include 'principal.php';

    // Crea una instancia del objeto Principal
    $crud = new Principal();

    // Obtiene la lista de lugares desde la base de datos
    $lugares = $crud->listar();

    // Muestra el encabezado de la lista
    echo "<h2>Lista de Lugares</h2>";

    // Verifica si hay lugares disponibles
    if (count($lugares) > 0) {
        // Muestra la tabla de lugares
        echo "<table border='1' style='border-collapse: collapse;'>";
        echo "<tr><th>IP</th><th>Nombre del Lugar</th><th>Descripción</th></tr>";

        // Itera sobre la lista de lugares y muestra cada lugar en una fila de la tabla
        foreach ($lugares as $lugar) {
            echo "<tr>";
            echo "<td>{$lugar['ip']}</td>";
            echo "<td>{$lugar['lugar']}</td>";
            echo "<td>{$lugar['descripcion']}</td>";
            echo "</tr>";
        }

        // Cierra la tabla
        echo "</table>";

        // Muestra un enlace para volver al menú
        echo "<a href='../vistas/menu_lugar.html'>Volver al menú</a>";
    } else {
        // Muestra un mensaje si no hay lugares disponibles
        echo "<p>No hay lugares disponibles.</p>";
    }
?>