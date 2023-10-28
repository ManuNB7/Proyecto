<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Modificar Jesuita</title>
        <link rel="stylesheet" href="../../estilos/estilos2.css">
    </head>
    <body>
    <h2>Modificar Jesuita</h2>
    <?php
        // Lógica para obtener los datos del Jesuita por su ID (puedes adaptarla según tu estructura)
        if (isset($_POST['id'])) {
            // Recibe el ID del formulario anterior
            $idJesuita = $_POST['id'];

            // Conexión a la base de datos
            $conexion = new mysqli("localhost", "root", "", 'jesuitas');

            // Consulta SQL para obtener los datos del Jesuita con el ID especificado
            $sql_select_jesuita = "SELECT idJesuita, nombre, firma FROM jesuita WHERE idJesuita = '$idJesuita'";
            $resultado_select_jesuita = $conexion->query($sql_select_jesuita);

            // Obtiene los datos del Jesuita
            $datos_jesuita = $resultado_select_jesuita->fetch_assoc();

            // Mostrar el resto del formulario solo si se encuentran datos del Jesuita
            if ($datos_jesuita) {
                ?>
                <table border="1">
                    <tr>
                        <th>ID del Jesuita</th>
                        <th>Nombre</th>
                        <th>Firma</th>
                    </tr>
                    <tr>
                        <td><?php echo $datos_jesuita['idJesuita']; ?></td>
                        <td><?php echo $datos_jesuita['nombre']; ?></td>
                        <td><?php echo $datos_jesuita['firma']; ?></td>
                    </tr>
                </table>

                <!-- Formulario para modificar datos -->
                <form action="../clases/crud_modificar.php" method="post">
                    <label for="nombre">Nuevo Nombre:</label>
                    <input type="text" id="nombre" name="nombre"><br>

                    <label for="firma">Nueva Firma:</label>
                    <input type="text" id="firma" name="firma"><br>

                    <input type="hidden" name="id" value="<?php echo $idJesuita; ?>">
                    <input type="submit" value="Realizar Operación">
                    <!-- Enlace para volver al menú -->
                    <a href="menu_jesuita.html">Volver al menú</a>
                </form>

                <?php
            } else {
                // Mensaje si no se encuentran datos para el ID proporcionado
                echo '<p>No se encontraron datos para el ID proporcionado.</p>';
            }

            // Cierra la conexión después de usarla
            $conexion->close();
        }
    ?>
    </body>
</html>
