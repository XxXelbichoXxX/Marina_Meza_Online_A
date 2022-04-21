<?php
include("../conexion.php");
$con=conectar();

$claveEvento=$_POST['claveEvento'];
$idServicio=$_POST['idServicio'];
$descripcion=$_POST['descripcion'];

$sql="INSERT INTO SOLICITUD (ID_TIPO_SER,CLAVE_EVENTO,DESCRIPCION) VALUES('$idServicio','$claveEvento','$descripcion')";
$query=mysqli_query($con,$sql);
if($query){
    Header("Location: detalleEvento.php?id=$claveEvento");
}else{

}

?>