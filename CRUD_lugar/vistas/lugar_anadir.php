<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Añadir lugar</title>
        <link rel="stylesheet" href="../../estilos/estilos2.css">
    </head>
    <body>
        <h2>Añadir lugar</h2>
        <form action="../clases/crud_anadir.php" method="post">
            <label for="ip">IP del lugar:</label>
            <input type="text" id="ip" name="ip"><br>

            <label for="lugar">Nombre:</label>
            <input type="text" id="lugar" name="lugar"><br>

            <label for="descripcion">Descripción:</label>
            <input type="text" id="descripcion" name="descripcion"><br>

            <input type="submit" value="Añadir">
            <a href="menu_lugar.html">Volver al menú</a>
        </form>
    </body>
</html>
