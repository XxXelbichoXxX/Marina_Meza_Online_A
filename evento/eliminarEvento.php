<?php
include("../conexion.php");
$con=conectar();

$clave_evento=$_GET['id'];

$sql="DELETE FROM detalle_servicio WHERE CLAVE_EVENTO = '$clave_evento'";
$query=mysqli_query($con,$sql);
$sql2="DELETE FROM evento WHERE CLAVE_EVENTO = '$clave_evento'";
$query2=mysqli_query($con,$sql2);
if($query & $query2){
    Header("Location: evento.php");
}else{
    
}

?>