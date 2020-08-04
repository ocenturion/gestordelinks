<?php
    include("conexion.php");
    $query="select * from gestordelinks_portfolio";
    $ejecutar=mysqli_query($conexion,$query);
    $jsondata=array();
    while($reg=mysqli_fetch_array($ejecutar)){
        $jsondata[]=array(
            "id"=>$reg["id"],
            "link"=>$reg["link"],
        );
    }
    $json=json_encode($jsondata);
    echo $json;
?>
