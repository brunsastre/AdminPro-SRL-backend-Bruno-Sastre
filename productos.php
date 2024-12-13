<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdminPro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <header>
        <img src="img/logosc.png" alt="Logo">
        <h1>AdminPro</h1>
        <nav>
            <ul>
                <li><a href="index.html">Inicio</a></li>
                <li><a href="quienessomos.html">¿Quiénes somos?</a></li>
                <li><a href="productos.php">Productos</a></li>
                <li><a href="contacto.html">Contacto</a></li>
                <li><a href="login.html">Acceder</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="cardsectiontitle">
            <h4>
                A continuación, se exponen nuestros cuatros desarrollos de software, escoge el ideal para tu emprendimiento.
            </h4>
        </section>

        <!-- Mejora de la estructura de tarjetas para la versión de Bootstrap 5 -->
        <section class="card-section">
            <div class="container">
                <div class="row">
                    <?php

                    $conexion = mysqli_connect("127.0.0.1:3306", "root", "", "trabajo final");

                    $query = "SELECT * FROM productos_adminpro";
                    $resultado = mysqli_query($conexion, $query);

                    while ($unaFila = mysqli_fetch_assoc($resultado)) {
                        echo '<div class="col-md-4 mb-4">
                                <div class="card">
                                  <img src="'.$unaFila["imagen_producto"].'" class="card-img-top" alt="Logo AdminPro Max">
                                     <div class="card-body">
                                       <h5 class="card-title">'.$unaFila["nombre_producto"].'</h5>
                                        <p class="card-text">'.$unaFila["resena_producto"].'</p>
                                         <a href="adminpromax.html" class="btn btn-primary">Ver más</a>
                                        </div>
                                     </div>
                                 </div>';
                    }
                    mysqli_close($conexion);
                    ?>
                </div>
            </div>
        </section>

        <!--He utilizado el sistema de grid de Bootstrap para alinear las tarjetas en una fila y he añadido mb-4 para el margen inferior de las tarjetas.
Las tarjetas tienen un tamaño consistente y se adaptan mejor a diferentes tamaños de pantalla.-->

        <!-- Scripts de Bootstrap 5 -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

        <footer>
            <a href="contacto.html" class="footercontact">Contacto AdminPro S.R.L.</a>
        </footer>

</body>

</html>