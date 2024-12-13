<?php

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
?>

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
    </header>s
    <main>
        <form action="editar_producto.php" method="post" enctype="multipart/form-data" class="formulario">
            <input type="hidden" id="id_producto" name="id_producto" value="<?php echo ((isset($producto["id_producto"])) ? ($producto["id_producto"]) : ("")) ?>">
            <label>Nombre:</label><input type="text" value="<?php echo ((isset($producto["nombre_producto"])) ? ($producto["nombre_producto"]) : ("")) ?>" id="nombre_producto" name="nombre_producto" autocomplete="off">
            <br>
            <label>Precio:</label><input type="text" value="<?php echo ((isset($producto["precio_producto"])) ? ($producto["precio_producto"]) : ("")) ?>" id="precio_producto" name="precio_producto" autocomplete="off">
            <br>
            <img style="max-width: 150px;" class="imagen-preview" src="<?php echo ((isset($producto["imagen_producto"])) ? ($producto["imagen_producto"]) : ("")) ?>">
            <br>
            <label>Imagen:</label><input type="file" id="imagen_producto" name="imagen_producto">
            <br>
            <button>Editar</button><a href="./productos.php">Volver</a>
        </form>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>