<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Listar Lugares</title>
        <link rel="stylesheet" href="../../estilos/estilos3.css">
    </head>
    <body>
        <h2>Listar Lugares</h2>
        <?php
            // Lógica para mostrar la lista de lugares
            $conexion = new mysqli("localhost", "root", "", 'jesuitas');
            $sql_select_lugares = "SELECT ip, lugar, descripcion FROM lugar";
            $resultado_select_lugares = $conexion->query($sql_select_lugares);
        ?>
        <table>
            <tr>
                <th>IP</th>
                <th>Lugar</th>
                <th>Descripción</th>
            </tr>
            <?php
                // Mostrar filas de la tabla con los datos de los lugares
                while ($row = $resultado_select_lugares->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>{$row['ip']}</td>";
                    echo "<td>{$row['lugar']}</td>";
                    echo "<td>{$row['descripcion']}</td>";
                    echo "</tr>";
                }
            ?>
        </table>
        <?php
            // Cierra la conexión después de usarla
            $conexion->close();
        ?>
    </body>
</html>
