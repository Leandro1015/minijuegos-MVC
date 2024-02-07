<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Consultar Minijuego</title>
    </head>
    <body>
        <h1>Consultar el nombre del Minijuego</h1>
        <form action="buscarMinijuego.php" method="post">
            <fieldset>
                <p>
                    <select name="id">
                        <?php
                            foreach ($minijuegos as $minijuego) {
                                echo "<option value='" . $minijuego['idMinijuego'] . "'>" . $minijuego['nombre'] . "</option>";
                            }
                        ?>
                    </select>
                </p>
                <input type="submit" value="Buscar">
            </fieldset>
        </form>
    </body>
</html>