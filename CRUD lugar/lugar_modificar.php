<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Modificar Lugar</title>
        <style>

        </style>
    </head>
    <body>
        <h2>Modificar Lugar</h2>
        <?php
            // Lógica para mostrar la lista de lugares
            $conexion = new mysqli("localhost", "root", "", 'jesuitas');
            $sql_select_lugares = "SELECT ip, lugar FROM lugar";
            $resultado_select_lugares = $conexion->query($sql_select_lugares);
            ?>
        <form action="lugar.php" method="post">
            <label for="ip">Selecciona un lugar:</label>
            <select id="ip" name="ip" required>
                <?php
                    // Mostrar opciones de lugares
                    while ($row = $resultado_select_lugares->fetch_assoc()) {
                        echo "<option value='{$row['ip']}'>{$row['ip']}</option>";
                    }
                ?>
            </select><br>

            <label for="lugar">Nombre:</label>
            <input type="text" id="lugar" name="lugar" required><br>

            <label for="descripcion">Descripción:</label>
            <input type="text" id="descripcion" name="descripcion" required><br>

            <input type="hidden" name="opcion" value="2">
            <input type="submit" value="Realizar Operación">
        </form>
        <?php
            // Cierra la conexión después de usarla
            $conexion->close();
        ?>
    </body>
</html>
