<!DOCTYPE HTML>
<head>

    <title>
        Nuevo producto </title>
</head>
<body> 
<center><br><br><br>
    <form action="proceso_guardarproducto.php" method="POST" enctype="multipart/form-data">
        <input type="text" REQUIRED name="nombre" placeholder="Nombre del Producto" value=""/><br><br>
        <input type="file" REQUIRED name="imagen"/><br><br>
        <input type="submit" value="Aceptar"/>
    </form>
</center>
</body>
</html>
