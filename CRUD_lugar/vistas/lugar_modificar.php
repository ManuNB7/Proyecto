<?php
    // Obtener la IP del lugar a modificar
    $ip = $_GET['ip'];
?>

<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Modificar Lugar</title>
        <link rel="stylesheet" href="../../estilos/estilos2.css">
    </head>
    <body>
    <h2>Modificar Lugar</h2>
    <form action="../clases/crud_modificar.php" method="get">
        <label for="lugar">Nombre del Lugar:</label>
        <input type="text" id="lugar" name="lugar"><br>

        <label for="descripcion">Descripción:</label>
        <input type="text" id="descripcion" name="descripcion"><br>

        <!-- Campo oculto para enviar la IP del lugar -->
        <input type="hidden" name="ip" value="<?php echo $ip; ?>">

        <input type="submit" value="Modificar Lugar">
        <a href="modificar_borrar.php">Volver al menú</a>
    </form>
    </body>
</html>