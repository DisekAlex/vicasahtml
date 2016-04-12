<!DOCTYPE HTML>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Modificar producto </title>
</head>
<body> 
    <?php
                include 'conexion1.php';
                $id=$_REQUEST['id'];
                $query= "SELECT * FROM tabla_imagen WHERE id='$id'";
                $resultado=$conexion->query($query);
                $row = $resultado->fetch_assoc();
                 ?>
<center><br><br><br>
    <form action="proceso_modificarproducto.php?id=<?php echo $row['id'];?>" method="POST" enctype="multipart/form-data">
        <input type="text" REQUIRED name="nombre" placeholder="Nombre del Producto" value="<?php echo $row['nombre'];?>"/><br/><br/>
        <img height="100px" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>" /><br/><br/>
        <input type="file" REQUIRED name="imagen"/><br><br>
        <input type="submit" value="Aceptar"/>
    </form>
</center>
</body>
</html>