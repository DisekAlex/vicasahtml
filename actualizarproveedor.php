<?php

include "conexion.php"; 

$id=$_POST["id"];

$nombre=$_POST["nom"];

$telefono=$_POST["tel"];

$correo=$_POST["corr"];

$empresa=$_POST["emp"];


$tipomercancia=$_POST["tipo"];



$sql="UPDATE nuevosproveedores SET Nombre='$nombre',Telefono='$telefono', 
CorreoElectronico='$correo', Empresa='$empresa', TipodeMercancia='$tipomercancia' where Id='$id' ";


$insercion=mysql_query($sql, $conexion);



if($insercion){
  
echo "Nombre: ".$nombre."<br>";
  
echo "Telefono: ".$telefono."<br>";
  
echo "Correo: ".$correo."<br>";
  
echo "Empresa: ".$empresa."<br>";

echo "Tipo de mercancia: ".$tipomercancia."<br>";
  
echo "Datos almacenados correctamente";  

}else{
  

echo "Error al registrar los datos: ".mysql_error();


}


mysql_close($conexion);


?>
