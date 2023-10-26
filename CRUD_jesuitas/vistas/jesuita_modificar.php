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
            // Lógica para mostrar la lista de jesuitas
            $conexion = new mysqli("localhost", "root", "", 'jesuitas');
            $sql_select_jesuitas = "SELECT idJesuita, nombre FROM jesuita";
            $resultado_select_jesuitas = $conexion->query($sql_select_jesuitas);
        ?>
        <form action="../clases/jesuita.php" method="post">
            <label for="id">Selecciona un Jesuita:</label>
            <select id="id" name="id">
                <?php
                    // Mostrar opciones de jesuitas
                    while ($row = $resultado_select_jesuitas->fetch_assoc()) {
                echo "<option value='{$row['idJesuita']}'>{$row['idJesuita']}</option>";
                }
                ?>
            </select><br>

            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre"><br>

            <label for="firma">Firma:</label>
            <input type="text" id="firma" name="firma"><br>

            <input type="hidden" name="opcion" value="2">
            <input type="submit" value="Realizar Operación">
            <a href="menu_jesuita.html">Volver al menú</a>
        </form>
        <?php
            // Cierra la conexión después de usarla
            $conexion->close();
        ?>
    </body>
</html>
