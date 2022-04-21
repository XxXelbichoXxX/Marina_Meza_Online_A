<?php

include("../conexion.php");
$con=conectar();

$idSolicitud=$_POST['id_solicitud'];
$idServ=$_POST['idServicio'];
$claveEvento=$_POST['claveEvento'];
$descripcion=$_POST['descripcion'];

$sql="UPDATE SOLICITUD SET ID_TIPO_SER='$idServ',CLAVE_EVENTO='$claveEvento',DESCRIPCION='$descripcion' WHERE ID_SOLICITUD='$idSolicitud'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: detalleEvento.php?id=$claveEvento");
    }
?>