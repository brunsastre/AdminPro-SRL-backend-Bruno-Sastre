<!doctype html>
<html lang="es">

<head>
    <title>Tabla</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,700" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <section class="ftco-section" style="background-color: black;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-4">
                    <h2 class="heading-section" style="color: white;">Productos</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-wrap">
                        <a href="./form_agregar_producto.php" style="color: white;">Agregar producto</a>
                        <a href="./index.html" style="color: white; float: right;" >Volver</a>
                        <table class="table">
                            <thead class="thead-primary" style="background-color:dimgray;">
                                <tr>
                                    <th>&nbsp;</th>
                                    <th>Producto</th>
                                    <th>Precio</th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                            <?php

                            $conexion = mysqli_connect("127.0.0.1:3306", "root", "", "trabajo final");

                            $query = "SELECT * FROM productos_adminpro";
                            $resultado = mysqli_query($conexion, $query);

                            while ($unaFila = mysqli_fetch_assoc($resultado)) {
                                echo "<tr class='alert' role='alert'>
                                    <td>
                                        <img style='max-width: 150px;' src= '" . $unaFila["imagen_producto"] . "'>
                                    </td>
                                    <td>
                                        <div>
                                            <span>" . $unaFila['nombre_producto'] . "</span>
                                        </div>
                                    </td>
                                    <td>" . $unaFila['precio_producto'] . "</td>
                                    <td>
                                        <a href='./eliminar_producto.php?id=" . $unaFila['id_producto'] . "' class='close' data-dismiss='alert' aria-label='Close'>
                                            <span aria-hidden='true'><i class='fa fa-close'></i></span>
                                        </a>
                                        <a href='./form_editar_producto.php?id=" . $unaFila['id_producto'] . "' style='color: #f65a5a'>
                                            Editar
                                        </a>
                                    </td>
                                </tr>";
                            }
                            mysqli_close($conexion);
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon='{"rayId":"81e64de6db471a92","version":"2023.10.0","token":"cd0b4b3a733644fc843ef0b185f98241"}' crossorigin="anonymous"></script>
</body>

</html>