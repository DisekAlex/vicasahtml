<?php

include "conexion.php"; 

$id=$_POST["id"];

$rfc=$_POST["rfcc"];

$nombre=$_POST["nom"];

$direccion=$_POST["dir"];

$fecha=$_POST["fech"];

$modalidad=$_POST["mod"];



$sql="UPDATE nuevosclientes SET RFC='$rfc', Nombre='$nombre', Direccion='$direccion', 
Fecha='$fecha', Modalidad='$modalidad' where Id='$id' ";


$insercion=mysql_query($sql, $conexion);



if($insercion){

echo "RFC: ".$rfc."<br>";
  
echo "Nombre: ".$nombre."<br>";
  
echo "Direcccion: ".$direccion."<br>";
  
echo "Fecha: ".$fecha."<br>";
  
echo "Modalidad: ".$modalidad."<br>";
  
echo "Datos almacenados correctamente";  

}else{
  

echo "Error al registrar los datos: ".mysql_error();


}


mysql_close($conexion);


?>
