<?php
if (!is_null($_POST["nombre_producto"]) && !is_null($_POST["precio_producto"]) && !is_null($_FILES["imagen_producto"])) {
    //Se quiere editar las 3 variables
    if (!empty($_POST["nombre_producto"]) && !empty($_POST["precio_producto"]) && !empty($_FILES["imagen_producto"])) {
        //Todo bien
        $nombre = $_POST["nombre_producto"];
        $precio = $_POST["precio_producto"];
        $imagen_producto = $_FILES["imagen_producto"];
        $id = $_GET["id"];


        $type = pathinfo($imagen_producto["name"], PATHINFO_EXTENSION); //Obtengo la extensión del archivo.
        $data = file_get_contents($_FILES["imagen_producto"]["tmp_name"]); //Obtengo la imagen convertida a string.
        $imagen_base64 = "data:image/" . $type . ";base64," . base64_encode($data);

        $conexion = mysqli_connect("127.0.0.1:3306", "root", "", "trabajo final");

        $query = "UPDATE productos_adminpro SET nombre_producto = '" . $nombre . "' , precio_producto = " . $precio . " , imagen_producto = '" . $imagen_base64 . "' WHERE id_producto = " . $id . "";
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
} elseif ($_FILES == null) {
    if (!empty($_POST["nombre_producto"]) && !empty($_POST["precio_producto"])) {
        $nombre = $_POST["nombre_producto"];
        $precio = $_POST["precio_producto"];
        $id = $_GET["id"];

        $conexion = mysqli_connect("127.0.0.1:3306", "root", "", "trabajo final");

        $query = "UPDATE productos_adminpro SET nombre_producto = '" . $nombre . "' , precio_producto = " . $precio . " WHERE id_producto = " . $id . "";
        $resultado = mysqli_query($conexion, $query);

        if ($resultado == true) {
            //Todo bien
            header("Location: tablaAdministrador.php");
        } else {
            echo "Hubo un problema3";
            echo "<br>";
        }

        mysqli_close($conexion);
    } else {
        echo "Hubo un problema4";
        echo "<br>";
    }
} elseif (!empty($_POST["precio_producto"]) && !empty($_FILES["imagen_producto"]) && empty($_POST["nombre_producto"])) {
    if (!empty($_FILES["imagen_producto"]) && !empty($_POST["precio_producto"])) {
        $imagen_producto = $_FILES["imagen_producto"];
        $precio = $_POST["precio_producto"];
        $id = $_GET["id"];

        $type = pathinfo($_FILES["imagen_producto"]["name"], PATHINFO_EXTENSION); //Obtengo la extensión del archivo.
        $data = file_get_contents($imagen_producto["tmp_name"]); //Obtengo la imagen convertida a string.
        $imagen_base64 = "data:image/" . $type . ";base64," . base64_encode($data);

        $conexion = mysqli_connect("127.0.0.1:3306", "root", "", "trabajo final");

        $query = "UPDATE productos_adminpro SET imagen_producto = '" . $imagen_base64 . "' , precio_producto = " . $precio . " WHERE id_producto = " . $id . "";
        $resultado = mysqli_query($conexion, $query);

        if ($resultado == true) {
            //Todo bien
            header("Location: tablaAdministrador.php");
        } else {
            echo "Hubo un problema5";
            echo "<br>";
        }

        mysqli_close($conexion);
    } else {
        echo "Hubo un problema6";
        echo "<br>";
    }
} elseif (!empty($_POST["nombre_producto"]) && !empty($_FILES["imagen_producto"]) && empty($_POST["precio_producto"])) {
    if (!empty($_POST["nombre_producto"]) && !empty($_FILES["imagen_producto"])) {
        $imagen_producto = $_FILES["imagen_producto"];
        $nombre = $_POST["nombre_producto"];
        $id = $_GET["id"];

        $type = pathinfo($imagen_producto["name"], PATHINFO_EXTENSION); //Obtengo la extensión del archivo.
        $data = file_get_contents($_FILES["imagen_producto"]["tmp_name"]); //Obtengo la imagen convertida a string.
        $imagen_base64 = "data:image/" . $type . ";base64," . base64_encode($data);

        $conexion = mysqli_connect("127.0.0.1:3306", "root", "", "trabajo final");

        $query = "UPDATE productos_adminpro SET imagen_producto = '" . $imagen_base64 . "' , nombre_producto = " . $nombre . " WHERE id_producto = " . $id . "";
        $resultado = mysqli_query($conexion, $query);

        if ($resultado == true) {
            //Todo bien
            header("Location: tablaAdministrador.php");
        } else {
            echo "Hubo un problema7";
            echo "<br>";
        }

        mysqli_close($conexion);
    } else {
        echo "Hubo un problema8";
        echo "<br>";
    }
} elseif (!empty($_POST["nombre_producto"]) && empty($_POST["precio_producto"]) && empty($_FILES["imagen_producto"])) {
    if (!empty($_POST["nombre_proucto"])) {
        $nombre = $_POST["nombre_producto"];
        $id = $_GET["id"];

        $conexion = mysqli_connect("127.0.0.1:3306", "root", "", "trabajo final");

        $query = "UPDATE productos_adminpro SET nombre_producto = " . $nombre . " WHERE id_producto = " . $id . "";
        $resultado = mysqli_query($conexion, $query);

        if ($resultado == true) {
            //Todo bien
            header("Location: tablaAdministrador.php");
        } else {
            echo "Hubo un problema9";
            echo "<br>";
        }

        mysqli_close($conexion);
    } else {
        echo "Hubo un problema10";
        echo "<br>";
    }
} elseif (empty($_POST["nombre_producto"]) && !empty($_POST["precio_producto"]) && empty($_FILES["imagen_producto"])) {
    if (!empty($_POST["precio_proucto"])) {
        $precio = $_POST["precio_producto"];
        $id = $_GET["id"];

        $conexion = mysqli_connect("127.0.0.1:3306", "root", "", "trabajo final");

        $query = "UPDATE productos_adminpro SET precio_producto = " . $precio . " WHERE id_producto = " . $id . "";
        $resultado = mysqli_query($conexion, $query);

        if ($resultado == true) {
            //Todo bien
            header("Location: tablaAdministrador.php");
        } else {
            echo "Hubo un problema11";
            echo "<br>";
        }

        mysqli_close($conexion);
    } else {
        echo "Hubo un problema12";
        echo "<br>";
    }
} elseif (empty($_POST["nombre_producto"]) && empty($_POST["precio_producto"]) && !empty($_FILES["imagen_producto"])) {
    $imagen_producto = $_FILES["imagen_producto"];
    $id = $_GET["id"];

    $type = pathinfo($imagen_producto["name"], PATHINFO_EXTENSION); //Obtengo la extensión del archivo.
    $data = file_get_contents($_FILES["imagen_producto"]["tmp_name"]); //Obtengo la imagen convertida a string.
    $imagen_base64 = "data:image/" . $type . ";base64," . base64_encode($data);

    $conexion = mysqli_connect("127.0.0.1:3306", "root", "", "trabajo final");

    $query = "UPDATE productos_adminpro SET imagen_producto = " . $imagen_base64 . " WHERE id_producto = " . $id;
    $resultado = mysqli_query($conexion, $query);

    if ($resultado == true) {
        //Todo bien
        header("Location: tablaAdministrador.php");
    } else {
        echo "Hubo un problema13";
        echo "<br>";
    }

    mysqli_close($conexion);
} else {
    echo "Hubo un problema14";
    echo "<br>";
}
