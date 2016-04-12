<?php
include "conexion.php";


$rfc=$_POST["rfcc"];
$nombre=$_POST["nom"];
$direccion=$_POST["dir"];
$fecha=$_POST["fech"];
$modalidad=$_POST["mod"];

$sql="INSERT INTO nuevosclientes (Id, RFC, Nombre, Direccion, Fecha, Modalidad) VALUES ('','$rfc','$nombre','$direccion','$fecha','$modalidad')";
$insercion=mysql_query($sql, $conexion);

if($insercion){
 echo "RFC ".$rfc."<br>";
  echo "Nombre ".$nombre."<br>";
  echo "Direccion ".$direccion."<br>";
  echo "Fecha ".$fecha."<br>";
  echo "Modalidad ".$modalidad."<br>";
  echo "Datos almacenados correctamente";  
}else{
  echo "Error al registrar los datos: ".mysql_error();
}
mysql_close($conexion);
?>
