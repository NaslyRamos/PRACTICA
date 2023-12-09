<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/estilo_result_busqueda.css"> <!-- Enlace al archivo CSS -->
    <title>Document</title>
</head>
<body>
<?php

require("../conexion.php");

if(isset($_GET["search"])) {
    $busqueda = $_GET["search"];

    $consulta = "SELECT * FROM productos WHERE producto LIKE '%$busqueda%'";
    $resultado = mysqli_query($conexion, $consulta);
    if(mysqli_num_rows($resultado) > 0) {
        echo "<tr class='titulo'><th colspan='6'><strong>RESULTADOS DE BUSQUEDA</strong></th></tr>";
        echo "<table border='1'>";
        echo "<tr><th>ID Producto</th><th>Sección</th><th>Producto</th><th>Origen</th><th>Importado</th><th>Precio</th></tr>";
        while($fila = mysqli_fetch_assoc($resultado)) {
            echo "<tr>";
            echo "<td>".$fila['id_producto']."</td>";
            echo "<td>".$fila['seccion']."</td>";
            echo "<td>".$fila['producto']."</td>";
            echo "<td>".$fila['origen']."</td>";
            echo "<td>".$fila['importado']."</td>";
            echo "<td>".$fila['precio']."</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "No se encontraron resultados.";
    }
} else {
    echo "No se proporcionó ningún término de búsqueda.";
}
?>
</body>
</html>
