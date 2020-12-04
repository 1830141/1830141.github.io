<?php
    $servidor = "localhost";
    $usuario = "root";
    $contrasena = "";
    $bd = "ejemplo";

    $conexion = mysqli_connect($servidor, $usuario, $contrasena, $bd);

    if(!$conexion){
        die('Conexion a la base de datos ' . $bd . 'falló' . mysqli_connect_error());
    }

    echo "Conectado a la base de datos $bd <br>";

    function valida_usuario_bd($usuario, $contrasena, $conexion){
        $query = "SELECT 1 AS user_Valido FROM usuarios WHERE usuario='$usuario' AND contrasena=MD5('$contrasena')";
        echo $query . "<br>";
        $resultado = mysqli_query($conexion, $query) or die('Error al ejecutar la consulta');
        if(mysqli_num_rows($resultado)==0){
            return false;
        } else {
            return true;
        }
    }

?>