<?php

if (!empty($_POST["nombre_producto"])&& !empty($_POST["precio_producto"]) && !empty($_FILES["imagen_producto"]["name"]) && !empty($_POST["resena_producto"])) {
    //Todo bien 
    if (isset($_POST["nombre_producto"]) && isset($_POST["precio_producto"]) && isset($_FILES["imagen_producto"]["name"])) {
        //Todo bien
        $nombre = $_POST["nombre_producto"];
        $precio = $_POST["precio_producto"];
        $imagen_producto = $_FILES["imagen_producto"];
        $resena = $_POST["resena_producto"];

        $type = pathinfo($imagen_producto["name"], PATHINFO_EXTENSION); //Obtengo la extensión del archivo.
        $data = file_get_contents($imagen_producto["tmp_name"]); //Obtengo la imagen convertida a string.
        $imagen_base64 = "data:image/" . $type . ";base64," . base64_encode($data);

        $conexion = mysqli_connect("127.0.0.1:3306", "root", "", "trabajo final");

        $query = "INSERT INTO productos_adminpro (nombre_producto, precio_producto, imagen_producto, resena_producto) VALUES ('" . $nombre . "'," . $precio . ", '" . $imagen_base64 . "', '" . $resena . "')";
        $resultado = mysqli_query($conexion, $query);

        if ($resultado == true) {
            //Todo bien
            header("Location: tablaAdministrador.php");
        } else {
            echo "Hubo un problema1";
            echo "<br>";
        }

        mysqli_close($conexion);
    } else {
        echo "Hubo un problema2";
        echo "<br>";
    }
} 
elseif (isset($_FILES["imagen_producto"])) {
    $nombre = $_POST["nombre_producto"];
    $precio = $_POST["precio_producto"];
    $resena = $_POST["resena_producto"];

    $conexion = mysqli_connect("127.0.0.1:3306", "root", "", "trabajo final");

    $query = "INSERT INTO productos_adminpro (nombre_producto, precio_producto, resena_producto) VALUES ('" . $nombre . "'," . $precio . ", '". $resena . "')";
    $resultado = mysqli_query($conexion, $query);

    if ($resultado == true) {
        //Todo bien
        header("Location: tablaAdministrador.php");
    } else {
        echo "Hubo un problema3";
        echo "<br>";
    }

    mysqli_close($conexion);
} 
else {
    echo "Hubo un problema4";
    echo "<br>";
}
