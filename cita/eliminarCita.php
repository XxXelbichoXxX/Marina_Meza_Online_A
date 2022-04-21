<?php
include("../conexion.php");
$con=conectar();

$id_cita=$_GET['id'];

$sql="DELETE FROM CITA WHERE ID_CITA = '$id_cita'";
$query=mysqli_query($con,$sql);
if($query){
    Header("Location: cita.php");
}else{
    
}

?>