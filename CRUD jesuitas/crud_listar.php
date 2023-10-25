<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Listar Jesuitas</title>
        <style>
            table {
                border-collapse: collapse;
                width: 100%;
            }

            th, td {
                border: 1px solid grey;
                padding: 8px;
            }

            th {
                background-color: #f2f2f2;
            }
        </style>
    </head>
    <body>
        <h2>Listar Jesuitas</h2>
        <?php
            // Lógica para mostrar la lista de jesuitas
            $conexion = new mysqli("localhost", "root", "", 'jesuitas');
            $sql_select_jesuitas = "SELECT idJesuita, nombre, firma FROM jesuita";
            $resultado_select_jesuitas = $conexion->query($sql_select_jesuitas);
        ?>
        <table>
            <tr>
                <th>ID Jesuita</th>
                <th>Nombre</th>
                <th>Firma</th>
            </tr>
            <?php
                // Mostrar filas de la tabla con los datos de los jesuitas
                while ($row = $resultado_select_jesuitas->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>{$row['idJesuita']}</td>";
                    echo "<td>{$row['nombre']}</td>";
                    echo "<td>{$row['firma']}</td>";
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
