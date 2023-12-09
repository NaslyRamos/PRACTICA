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


// Crear filtro usando WHERE
$consulta = "SELECT * FROM productos WHERE seccion='CERÁMICA'"; // Consulta SQL
$resultado = mysqli_query($conexion, $consulta);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="./style/estilos.css"> <!-- Enlace al archivo CSS -->
</head>
<body>
    <div class="contenedor">
        <h1>PRODUCTOS DE CERÁMICA</h1>
        <?php
        while ($fila = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
            echo "<div class='producto'>";
            echo "<p>ID PRODUCTO: " . $fila['id_producto'] . "</p>";
            echo "<p>PRODUCTO: " . $fila['producto'] . "</p>";
            echo "<p>PRECIO: " . $fila['precio'] . "</p>";
            echo "</div>";
        }
        //mysqli_close($conexion); // Cerrar la conexión 
        ?>
    </div>
</body>
</html>
