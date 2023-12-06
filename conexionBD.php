<?php 
$db_host="localhost"; //ubicacion de la base de datos
$db_nombre="usuario"; //nombre de la base de datos
$db_usuario="root"; //usuario de la base de datos
$db_contra=""; //contraseña de la base de datos

$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);//conexion
$consulta="SELECT * FROM datospersonales";//consulta sql
$resultado=mysqli_query($conexion,$consulta);
$fila=mysqli_fetch_row($resultado);//array que almacena los datos
echo $fila[0]." ";//muestra cada dato
echo $fila[1]." ";
echo $fila[2]." ";
echo $fila[3]." ";
     
?>