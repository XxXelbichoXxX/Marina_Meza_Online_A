<?php
include("../conexion.php");
$con=conectar();

$id_detalle=$_GET['id'];


$sql="DELETE FROM detalle_servicio WHERE ID_DETALLE= '$id_detalle'";
$query=mysqli_query($con,$sql);

if($query){
    Header("Location: evento.php");
}else{
    
}

?>
