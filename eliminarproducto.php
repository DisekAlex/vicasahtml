<?php
        include "conexion1.php";
        $id=$_REQUEST['id'];
        
        $query="DELETE FROM tabla_imagen  WHERE id='$id'";
                 $resultado= $conexion->query($query);
        
        if ($resultado){
            header("Location:mostrarproducto.php");
        }
        else {
            echo 'no se elimino';  
        }

        ?>
