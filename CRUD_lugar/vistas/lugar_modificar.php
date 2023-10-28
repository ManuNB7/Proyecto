<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Modificar Lugar</title>
        <link rel="stylesheet" href="../../estilos/estilos2.css">
    </head>
    <body>
    <h2>Modificar Lugar</h2>
    <?php
        // Lógica para obtener los datos del lugar por su IP (puedes adaptarla según tu estructura)
        if (isset($_POST['ip'])) {
            // Obtiene la IP del lugar desde el formulario
            $ipLugar = $_POST['ip'];

            // Conecta a la base de datos (puedes ajustar los parámetros según tu configuración)
            $conexion = new mysqli("localhost", "root", "", 'jesuitas');

            // Consulta SQL para obtener los datos del lugar por su IP
            $sql_select_lugar = "SELECT ip, lugar, descripcion FROM lugar WHERE ip = '$ipLugar'";

            // Ejecuta la consulta y obtiene los resultados
            $resultado_select_lugar = $conexion->query($sql_select_lugar);

            // Obtiene los datos del lugar
            $datos_lugar = $resultado_select_lugar->fetch_assoc();

            // Mostrar el resto del formulario solo si se encuentran datos del lugar
            if ($datos_lugar) {
                ?>

                <!-- Muestra los datos del lugar en una tabla -->
                <table border="1">
                    <tr>
                        <th>IP del Lugar</th>
                        <th>Nombre del Lugar</th>
                        <th>Descripción</th>
                    </tr>
                    <tr>
                        <td><?php echo $datos_lugar['ip']; ?></td>
                        <td><?php echo $datos_lugar['lugar']; ?></td>
                        <td><?php echo $datos_lugar['descripcion']; ?></td>
                    </tr>
                </table>

                <!-- Formulario para modificar el lugar -->
                <form action="../clases/crud_modificar.php" method="post">
                    <label for="lugar">Nuevo Nombre del Lugar:</label>
                    <input type="text" id="lugar" name="lugar" value="<?php echo $datos_lugar['lugar']; ?>"><br>

                    <label for="descripcion">Nueva Descripción:</label>
                    <input type="text" id="descripcion" name="descripcion" value="<?php echo $datos_lugar['descripcion']; ?>"><br>

                    <!-- Campo oculto con la IP del lugar -->
                    <input type="hidden" name="ip" value="<?php echo $ipLugar; ?>">

                    <!-- Botón para realizar la operación -->
                    <input type="submit" value="Realizar Operación">

                    <!-- Enlace para volver al menú -->
                    <a href="menu_lugar.html">Volver al menú</a>
                </form>

            <?php
            } else {
                // Muestra un mensaje si no se encuentran datos para la IP proporcionada
                echo '<p>No se encontraron datos para la IP proporcionada.</p>';
            }

            // Cierra la conexión después de usarla
            $conexion->close();
        }
    ?>
    </body>
</html>