<?php

    $titulo;
    $autor;
    $editorial;
    $precio = 0;

?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <link rel="stylesheet" href="style.css">
    </head>
<body>
    <main>

        <h1 class="titulo">Registro de libros</h1>
        <form action="index.php" method="GET">

            <div>
                <label class="etiquetas" for="titulo">Título:</label>
                <input class="controles" type="text" name="titulo" required>
            </div>
            <div>
                <label class="etiquetas" for="editorial">Editorial:</label>
                <input class="controles" type="text" name="editorial" required>
            </div>
            <div>
                <label class="etiquetas" for="autor">Autor:</label>
                <input class="controles" type="text" name="autor" required>
            </div>
            <div>
                <label class="etiquetas" for="etiquetas" for="enlace">Enlace</label>
                <input class="controles" type="text" type="text" name="enlace" required>
            </div>
            <div>
                <label class="etiquetas" for="precio">Precio:</label>
                <input class="controles" type="number" step="0.01" name="precio" required>
            </div>

            <input type="submit" value="Aceptar" >
        </form>

        <a href="index.php">Regresar</a>
     </main>
</body>

</html>