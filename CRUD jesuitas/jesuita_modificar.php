<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Modificar Jesuita</title>
        <style>

        </style>
    </head>
    <body>
        <h2>Modificar Jesuita</h2>
        <?php
            // Lógica para mostrar la lista de jesuitas
            $conexion = new mysqli("localhost", "root", "", 'jesuitas');
            $sql_select_jesuitas = "SELECT idJesuita, nombre FROM jesuita";
            $resultado_select_jesuitas = $conexion->query($sql_select_jesuitas);
        ?>
        <form action="jesuita.php" method="post">
            <label for="id">Selecciona un Jesuita:</label>
            <select id="id" name="id" required>
                <?php
                    // Mostrar opciones de jesuitas
                    while ($row = $resultado_select_jesuitas->fetch_assoc()) {
                echo "<option value='{$row['idJesuita']}'>{$row['idJesuita']}</option>";
                }
                ?>
            </select><br>

            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required><br>

            <label for="firma">Firma:</label>
            <input type="text" id="firma" name="firma" required><br>

            <input type="hidden" name="opcion" value="2">
            <input type="submit" value="Realizar Operación">
        </form>
        <?php
            // Cierra la conexión después de usarla
            $conexion->close();
        ?>
    </body>
</html>
