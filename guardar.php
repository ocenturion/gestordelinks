<?php
    include("conexion.php");
    $id=$_POST['id'];
    $link=$_POST['link'];
    
    $query="update gestordelinks_portfolio set link='$link' where id='$id'";
    $ejecutar=mysqli_query($conexion,$query);
    if($ejecutar){
        echo "Guardado correctamente.";
    }else{
        echo "Algo salio mal". mysqli_error($conexion);
    }
?>