<?php

include("../conexion.php");
$con=conectar();

$idDetalle=$_POST['id_detalle'];
$idServ=$_POST['idServicio'];
$claveEvento=$_POST['claveEvento'];
$estatusS=$_POST['estatusSv'];

$sql="UPDATE DETALLE_SERVICIO SET ID_PROVEEDOR='$idServ',CLAVE_EVENTO='$claveEvento',ESTATUS='$estatusS' WHERE ID_DETALLE='$idDetalle'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: detalleEvento.php?id=$claveEvento");
    }
?>