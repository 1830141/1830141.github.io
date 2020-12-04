<?php
    
    $servidor = "localhost";
    $usuario = "root";
    $contrasena = "";
    $bd = "libreria";

    function conectar($servidor, $usuario, $contrasena, $bd){
        $conexion = mysqli_connect($servidor, $usuario, $contrasena, $bd);
        if(!$conexion){
            die("Ocurrió un error al conectar con la base de datos.");
        } else{
            echo "Conexión exitosa con la base de datos";
        }
        return $conexion;
    }

    function desconectar($conexion){
        mysqli_close($conexion);
    }
?>