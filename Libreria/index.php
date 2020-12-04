<html>
    <head>
        <title>Document</title>
        <link rel="stylesheet" href="style.css">
        <meta charset="UTF-8">
    </head>
    <body>
        <main>

            <?php 
            require('conexion.php'); 
            $conexion = conectar($servidor, $usuario, $contrasena, $bd);
            ?>

            <h1>Lista de libros</h1>
            <a href="registrar.php">Nuevo registro</a>
            <table>
                <thead>
                    <tr>
                        <th>Titulo</th>
                        <th>Autor</th>
                        <th>Precio</th>
                        <th>Editorial</th>
                        <th>Enlace</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if(isset($_GET["titulo"])){
                            $titulo = $_GET["titulo"];
                            $editorial = $_GET["editorial"];
                            $autor = $_GET["autor"];
                            $enlace = $_GET["enlace"];
                            $precio = $_GET["precio"];

                            $consulta = "INSERT INTO libros(titulo, editorial, autor, enlace, precio)
                                values('$titulo', '$editorial',  '$autor', '$enlace', '$precio')";
                            if(mysqli_query($conexion, $consulta)){
                                echo "Registro insertado correctamente.";
                            }else{
                                echo "Ocurrió un error al insertar el registro.";
                            }

                            $consulta2 = "SELECT titulo, editorial, autor, enlace, precio FROM libros";
                            $resultados = mysqli_query($conexion, $consulta2);
                            if($resultados->num_rows>0){
                                while($fila = $resultados->fetch_assoc()){
                                    echo "<tr>";
                                        echo "<td>" . $fila["titulo"] . "</td>";
                                        echo "<td>" . $fila["editorial"] . "</td>";
                                        echo "<td>" . $fila["autor"] . "</td>";
                                        echo "<td>" . $fila["enlace"] . "</td>";
                                        echo "<td>" . $fila["precio"] . "</td>";
                                    echo "</tr>";
    
                                } 

                            }else{
                                echo "Error al hacer la consulta a la base de datos";
                            }
                            

                            /*echo "<tr>";
                                echo "<td> $titulo </td>";
                                echo "<td> $autor </td>";
                                echo "<td> $precio </td>";
                                echo "<td> $editorial </td>";
                                echo "<td> </td>";
                                echo "<td> </td>";
                                echo "<td> </td>";
                            echo "</tr>";*/
                        }
                    ?>
                </tbody>
            </table>
        </main>

        <?php desconectar($conexion); ?>

    </body>

</html>