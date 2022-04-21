<?php
include("../conexion.php");
$con=conectar();

$id_tipoS=$_GET['id'];

$sql="DELETE FROM TIPO_SERVICIO WHERE ID_TIPO_SER = '$id_tipoS'";
$query=mysqli_query($con,$sql);
if($query){
    Header("Location: tipoServicio.php");
}else{
    
}

?>