<?php 
$db_host="localhost"; //ubicacion de la base de datos
$db_nombre="usuario"; //nombre de la base de datos
$db_usuario="root"; //usuario de la base de datos
$db_contra=""; //contraseña de la base de datos

$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);//conexion

//Mensaje de error cuando se define mal la ubicacion de la base de datos, en este caso seria el valor dado en la variable $db_host
if(mysqli_connect_errno()){
    echo "LA CONEXION CON LA BASE DE DATOS A FALLADO";
    exit();
}
//Mensaje de error cuando el nombre de la base de datos es incorrecto
mysqli_select_db($conexion,$db_nombre)or die ("NO SE ENCUENTRA LA BASE DE DATOS");

$consulta ="SELECT *FROM datospersonales";
$resultado =mysqli_query($conexion,$consulta);
while($fila=mysqli_fetch_row($resultado)){ //muestra todos los datos almacenados en la tabla datospersonales
    echo $fila[0]." ";
    echo $fila[1]." ";
    echo $fila[2]." ";
    echo $fila[3]." ";
    echo "<br>";
}

mysqli_close($conexion); //finaliza la conexion con la base de datos
?>