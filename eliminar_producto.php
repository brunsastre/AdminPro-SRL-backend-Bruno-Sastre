<?php

if (isset($_GET["id"])) {
    //Todo bien
    if (!empty($_GET["id"])) {
        //Todo bien
        if (is_numeric($_GET["id"])) {
            //Todo bien
            $id = $_GET["id"];

            $conexion = mysqli_connect("127.0.0.1:3306", "root", "", "trabajo final");

            $query = "DELETE FROM productos_adminpro WHERE id_producto = " . $id;
            $resultado = mysqli_query($conexion, $query);

            if ($resultado === true) {
                //Todo bien
                header("Location: tablaAdministrador.php");
            } else {
                echo "Hubo un problema";
                echo "<br>";
            }

            mysqli_close($conexion);
        } else {
            echo "Hubo un problema";
            echo "<br>";
        }
    } else {
        echo "Hubo un problema";
        echo "<br>";
    }
} else {
    echo "Hubo un problema";
    echo "<br>";
}
