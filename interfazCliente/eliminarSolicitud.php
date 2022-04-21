<?php
include("../conexion.php");
$con=conectar();

$id_solicitud=$_GET['id'];


$sql="DELETE FROM solicitud WHERE ID_SOLICITUD= '$id_solicitud'";
$query=mysqli_query($con,$sql);

if($query){
    Header("Location: detalleEvento.php");
}else{
    
}

?>
