<?php 
 
include "conexion.php";
 
$id=$_POST["id"];

 
 
$sql="SELECT * FROM nuevosclientes where Id='$id'";
 
$resp=mysql_query($sql,$conexion);
 
 

$datos=array();
 
 


if($resp){
  
$i=0;
  
while($fila=mysql_fetch_assoc($resp)){
    
$datos[$i]=$fila;
    
$i=$i+1;
  
}
 
}else{
  
echo "Error al procesar la consulta".mysql_error(); 
 
}
 
mysql_close($conexion);
 
echo json_encode($datos);

?>