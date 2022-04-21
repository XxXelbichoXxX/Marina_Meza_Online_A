<?php
include("../conexion.php");
$con=conectar();

$id_proveedor=$_GET['id'];

$sql="DELETE FROM PROVEEDOR WHERE ID_PROVEEDOR = '$id_proveedor'";
$query=mysqli_query($con,$sql);
if($query){
    Header("Location: proveedor.php");
}else{
    
}

?>