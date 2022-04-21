<?php
include("../conexion.php");
$con=conectar();

$claveEvento=$_POST['claveEvento'];
$idServicio=$_POST['idServicio'];
$estatusSv=$_POST['estatusSv'];

$sql="INSERT INTO DETALLE_SERVICIO (ID_PROVEEDOR,CLAVE_EVENTO,ESTATUS) VALUES('$idServicio','$claveEvento','$estatusSv')";
$query=mysqli_query($con,$sql);
if($query){
    Header("Location: detalleEvento.php?id=$claveEvento");
}else{

}

?>