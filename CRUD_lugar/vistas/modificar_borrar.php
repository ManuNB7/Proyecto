<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Listado de Lugares</title>
        <link rel="stylesheet" href="../../estilos/estilos4.css">
    </head>
    <body>
        <h2>Listado de Lugares</h2>
        <table>
            <tr>
                <th>Nombre del Lugar</th>
                <th>Eliminar</th>
                <th>Modificar</th>
            </tr>
            <?php
                // Incluir la clase Principal
                include '../clases/principal.php';

                // Crear una instancia de la clase Principal
                $crud = new Principal();

                // Obtener la lista de lugares
                $lugares = $crud->listar();

                // Verificar si hay lugares
                if (count($lugares) > 0) {
                    // Mostrar los resultados en la tabla
                    foreach ($lugares as $lugar) {
                        echo "<tr>";
                        echo '<td>'.$lugar['lugar'].'</td>';
                        echo '<td><a href="../clases/crud_borrar.php?ip='.$lugar['ip'].'">Eliminar</a></td>';
                        echo '<td><a href="lugar_modificar.php?ip='.$lugar['ip'].'">Modificar</a></td>';
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>No hay lugares disponibles.</td></tr>";
                }
            ?>
        </table>
        <br>
        <a href="menu_lugar.html">Volver al menú</a>
    </body>
</html>