<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        require("../conexion.php");
        function ejecutar_consulta($laconsulta){
            $busqueda=$_GET["search"];
            $consulta="SELECT *FROM productos WHERE producto like '%$laconsulta%'";
            $resultado =mysqli_query($conexion,$consulta);
    
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
        }
        
    ?>
    

</head>
<body>
    <?php
    $mibusqueda=$_GET["buscar"];
    $mipagina=$_SERVER["PHP_SELF"];
    
    if($mibusqueda != NULL)
    {
        ejecutar_consulta($mibusqueda);
    }
    else{
        echo("<form action='".$mibusqueda."'method='get'>
        <label>Buscar:<input type='text' name='buscar'></label>
        <input  type='submit' name='search' value='Enviar'>
        </form>" );
    }
    ?>
    

</body>
</html> 