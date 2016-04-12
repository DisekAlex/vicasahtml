<?php
include "conexion.php";


$nombre=$_POST["nom"];
$telefono=$_POST["tel"];
$correo=$_POST["corr"];
$empresa=$_POST["empr"];
$mercancia=$_POST["merc"];

$sql="INSERT INTO nuevosproveedores (Id, Nombre, Telefono, CorreoElectronico, Empresa, TipodeMercancia) VALUES ('','$nombre','$telefono','$correo','$empresa','$mercancia')";
$insercion=mysql_query($sql, $conexion);

if($insercion){
  echo "Nombre ".$nombre."<br>";
  echo "Telefono ".$telefono."<br>";
  echo "Correo ".$correo."<br>";
  echo "empresa ".$empresa."<br>";
  echo "mercancia ".$mercancia."<br>";
  echo "Datos almacenados correctamente";  
}else{
  echo "Error al registrar los datos: ".mysql_error();
}
mysql_close($conexion);
?>
