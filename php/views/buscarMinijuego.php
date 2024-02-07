<!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <title>Buscar Minijuego</title>
    </head>
    <body>
        <h1>Buscar Minijuego</h1>
        <form action="../clases/crudModificar.php" method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>">

            <label for="nombre">Nuevo Nombre:</label>
            <input type="text" name="nombre" value="<?php echo $datos_minijuego['nombre']; ?>"><br>

            <label for="descripcion">Nueva Descripcion:</label>
            <input type="text" name="descripcion" value="<?php echo $datos_minijuego['descripcion']; ?>"><br>

            <label for="url">Nueva Url:</label>
            <input type="text" name="url" value="<?php echo $datos_minijuego['url_juego']; ?>"><br>

            <input type="submit" value="Modificar">
        </form>

        <!-- Enlace para volver a la página de consulta -->
        <a href="formConsultar.php">Volver a la consulta</a>
    </body>
</html>
