<!DOCTYPE php>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario agregar producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles2.css">
</head>

<body>
    <header>
        <div class="logo"><img class="imagenlogo" src="img/logosc.png" alt="Logo AdminPro"></div>
    </header>
    <main>
        <form action="./agregar_producto.php" method="post" enctype="multipart/form-data" class="formulario">
            <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre_producto" name="nombre_producto" autocomplete="off" required>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Precio</label>
                <input type="number" class="form-control" id="precio_producto" name="precio_producto" required>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Imagen</label>
                <input type="file" class="form-control" id="imagen_producto" name="imagen_producto">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Reseña</label>
                <input type="text" class="form-control" id="resena_producto" name="resena_producto" autocomplete="off" required>
            </div>
            <button class="btn btn-primary">Agregar</button><a href="./tablaAdministrador.php">Volver</a>
        </form>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>