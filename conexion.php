<?php 

$servidor="localhost";

$usuario="root";

$clave="";

$BaseDatos="ferreteriavicasa";


$conexion=mysql_connect($servidor,$usuario,$clave)or 

die("Error al establecer la conexión: ".
mysql_error());

mysql_select_db($BaseDatos,$conexion);


?>