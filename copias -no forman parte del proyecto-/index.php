<?php

//Inicio la conexión a la base
//127.0.0.1 === localhost
//3306 sale del xampp
//(servidor:puerto, usuario, password, esquema)
$conexion = mysqli_connect("127.0.0.1:3306", "root", "", "trabajo final");

if ($conexion === false) {
    echo "No pude conectarme!";
    echo "<br>";
} else {
    echo "Me conecte a la base de datos!";
    echo "<br>";
}



//Cierro la conexión a la base
mysqli_close($conexion);
