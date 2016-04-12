<?php
        include "conexion1.php";
        $nombre=$_POST["nombre"];
        $imagen= addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
        
        $query="INSERT INTO tabla_imagen(nombre,imagen) VALUES('$nombre','$imagen')";
                 $resultado= $conexion->query($query);
        
        if ($resultado){
            header("Location:mostrarproducto.php");
        }
        else {
            echo 'no se inserto';  
        }

        ?>
