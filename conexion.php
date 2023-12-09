<?php
require("conexionBD.php"); // Carga los datos del archivo llamado

$conexion = mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre); // Conexión
// Mensaje de error cuando se define mal la ubicación de la base de datos, en este caso sería el valor dado en la variable $db_host
if (mysqli_connect_errno()) {
    echo "LA CONEXION CON LA BASE DE DATOS HA FALLADO";
    exit();
}
// Mensaje de error cuando el nombre de la base de datos es incorrecto
mysqli_select_db($conexion, $db_nombre) or die("NO SE ENCUENTRA LA BASE DE DATOS");


?>

