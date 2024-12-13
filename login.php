<?php

if($_POST["correo"] === "potrerodigital@gmail.com" && $_POST["contraseña"] === "99999999"){
  //echo "Usuario logueado";
  header("Location: tablaAdministrador.php");
}
else{
  //echo "contraseña o correo incorrecto";
  header("Location: login.html");
}

?>