<?php
    // Incluye el archivo que contiene la definición de la clase Principal.
    include 'principal.php';

    // Crea una instancia de la clase Principal.
    $crud = new Principal();

    // Obtiene la lista de visitas llamando al método listar de la instancia de la clase Principal.
    $visitas = $crud->listar();

    // Muestra un encabezado indicando que se está viendo la lista de visitas.
    echo "<h2>Lista de Visitas</h2>";

    // Verifica si hay visitas en la lista.
    if (count($visitas) > 0) {
        // Si hay visitas, muestra una tabla con los detalles de cada visita.
        echo "<table border='1' style='border-collapse: collapse;'>";
        echo "<tr><th>ID de Visita</th><th>ID del Jesuita</th><th>IP del lugar</th><th>Fecha y Hora</th></tr>";

        // Itera sobre la lista de visitas y muestra cada visita en una fila de la tabla.
        foreach ($visitas as $visita) {
            echo "<tr>";
            echo "<td>{$visita['idVisita']}</td>";
            echo "<td>{$visita['idJesuita']}</td>";
            echo "<td>{$visita['ip']}</td>";
            echo "<td>{$visita['fechaHora']}</td>";
            echo "</tr>";
        }

        // Cierra la tabla.
        echo "</table>";

        // Muestra un enlace para volver al menú de visitas.
        echo "<a href='../vistas/menu_visita.html'>Volver al menú</a>";
    } else {
        // Si no hay visitas, muestra un mensaje indicando que no hay visitas disponibles.
        echo "<p>No hay visitas disponibles.</p>";
    }
?>