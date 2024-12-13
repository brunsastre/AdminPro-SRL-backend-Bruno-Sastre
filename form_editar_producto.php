<!DOCTYPE php>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario editar producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles2.css">
</head>

<body>
    <header>
        <div class="logo"><img class="imagenlogo" src="img/logosc.png" alt="Logo AdminPro"></div>
    </header>
    <main>
        <form action="editar_producto.php" method="post" enctype="multipart/form-data" class="formulario">
            <input type="hidden" id="id_producto" name="id_producto" value="<?php

                                                                            $producto = array();

                                                                            if (isset($_GET["id"])) {
                                                                                $id = $_GET["id"];
                                                                                //todo bien, puedo seguir con el proceso!
                                                                                if (!empty($id)) {
                                                                                    //todo bien, puedo seguir con el proceso!
                                                                                    $conexion = mysqli_connect("127.0.0.1:3306", "root", "", "trabajo final");

                                                                                    $query = "SELECT * FROM productos_adminpro WHERE id_producto = " . $id;
                                                                                    $resultado = mysqli_query($conexion, $query);

                                                                                    $producto = mysqli_fetch_assoc($resultado);

                                                                                    mysqli_close($conexion);
                                                                                }
                                                                            }
                                                                            echo ((isset($producto["id_producto"])) ? ($producto["id_producto"]) : ("")) ?>">
            <label for="name" class="form-label">Nombre:</label><input type="text" class="form-control" value="<?php

                                                                                                                $producto = array();

                                                                                                                if (isset($_GET["id"])) {
                                                                                                                    $id = $_GET["id"];
                                                                                                                    //todo bien, puedo seguir con el proceso!
                                                                                                                    if (!empty($id)) {
                                                                                                                        //todo bien, puedo seguir con el proceso!
                                                                                                                        $conexion = mysqli_connect("127.0.0.1:3306", "root", "", "trabajo final");

                                                                                                                        $query = "SELECT * FROM productos_adminpro WHERE id_producto = " . $id;
                                                                                                                        $resultado = mysqli_query($conexion, $query);

                                                                                                                        $producto = mysqli_fetch_assoc($resultado);

                                                                                                                        mysqli_close($conexion);
                                                                                                                    }
                                                                                                                }
                                                                                                                echo ((isset($producto["nombre_producto"])) ? ($producto["nombre_producto"]) : (""))
                                                                                                                ?>" id="nombre_producto" name="nombre_producto" autocomplete="off">
            <br>
            <label for="price" class="form-label">Precio:</label><input type="number" class="form-control" value="<?php

                                                                                                                    $producto = array();

                                                                                                                    if (isset($_GET["id"])) {
                                                                                                                        $id = $_GET["id"];
                                                                                                                        //todo bien, puedo seguir con el proceso!
                                                                                                                        if (!empty($id)) {
                                                                                                                            //todo bien, puedo seguir con el proceso!
                                                                                                                            $conexion = mysqli_connect("127.0.0.1:3306", "root", "", "trabajo final");

                                                                                                                            $query = "SELECT * FROM productos_adminpro WHERE id_producto = " . $id;
                                                                                                                            $resultado = mysqli_query($conexion, $query);

                                                                                                                            $producto = mysqli_fetch_assoc($resultado);

                                                                                                                            mysqli_close($conexion);
                                                                                                                        }
                                                                                                                    }
                                                                                                                    echo ((isset($producto["precio_producto"])) ? ($producto["precio_producto"]) : ("")) ?>" id="precio_producto" name="precio_producto" autocomplete="off">
            <br>
            <img style="max-width: 150px;" class="imagen-preview" src="<?php

                                                                        $producto = array();

                                                                        if (isset($_GET["id"])) {
                                                                            $id = $_GET["id"];
                                                                            //todo bien, puedo seguir con el proceso!
                                                                            if (!empty($id)) {
                                                                                //todo bien, puedo seguir con el proceso!
                                                                                $conexion = mysqli_connect("127.0.0.1:3306", "root", "", "trabajo final");

                                                                                $query = "SELECT * FROM productos_adminpro WHERE id_producto = " . $id;
                                                                                $resultado = mysqli_query($conexion, $query);

                                                                                $producto = mysqli_fetch_assoc($resultado);

                                                                                mysqli_close($conexion);
                                                                            }
                                                                        }
                                                                        echo ((isset($producto["imagen_producto"])) ? ($producto["imagen_producto"]) : ("")) ?>">
            <br>
            <label for="name" class="form-label">Imagen:</label><input type="file" class="form-control" id="imagen_producto" name="imagen_producto">
            <br>
            <input type="hidden" id="resena_producto" name="resena_producto" value="<?php

                                                                                    $producto = array();

                                                                                    if (isset($_GET["id"])) {
                                                                                        $id = $_GET["id"];
                                                                                        //todo bien, puedo seguir con el proceso!
                                                                                        if (!empty($id)) {
                                                                                            //todo bien, puedo seguir con el proceso!
                                                                                            $conexion = mysqli_connect("127.0.0.1:3306", "root", "", "trabajo final");

                                                                                            $query = "SELECT * FROM productos_adminpro WHERE id_producto = " . $id;
                                                                                            $resultado = mysqli_query($conexion, $query);

                                                                                            $producto = mysqli_fetch_assoc($resultado);

                                                                                            mysqli_close($conexion);
                                                                                        }
                                                                                    }
                                                                                    echo ((isset($producto["resena_producto"])) ? ($producto["resena_producto"]) : ("")) ?>">
            <label for="name" class="form-label">Reseña:</label><input type="text" class="form-control" id="resena_producto" name="resena_producto" value="<?php

                                                                                                                                                            $producto = array();

                                                                                                                                                            if (isset($_GET["id"])) {
                                                                                                                                                                $id = $_GET["id"];
                                                                                                                                                                //todo bien, puedo seguir con el proceso!
                                                                                                                                                                if (!empty($id)) {
                                                                                                                                                                    //todo bien, puedo seguir con el proceso!
                                                                                                                                                                    $conexion = mysqli_connect("127.0.0.1:3306", "root", "", "trabajo final");

                                                                                                                                                                    $query = "SELECT * FROM productos_adminpro WHERE id_producto = " . $id;
                                                                                                                                                                    $resultado = mysqli_query($conexion, $query);

                                                                                                                                                                    $producto = mysqli_fetch_assoc($resultado);

                                                                                                                                                                    mysqli_close($conexion);
                                                                                                                                                                }
                                                                                                                                                            }
                                                                                                                                                            echo ((isset($producto["resena_producto"])) ? ($producto["resena_producto"]) : ("")) ?>">
            <br>
            <button class="btn btn-primary">Editar</button><a href="./tablaAdministrador.php">Volver</a>
        </form>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>