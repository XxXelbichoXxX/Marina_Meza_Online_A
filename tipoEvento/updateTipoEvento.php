<?php

include("../conexion.php");
$con=conectar();

$id_tipoS=$_POST['id_tipoS'];
$nombreTipo=$_POST['nombreS'];

$sql="UPDATE TIPO_SERVICIO SET NOMBRE_TIPO_SERV='$nombreTipo' WHERE ID_TIPO_SER='$id_tipoS'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: tipoServicio.php");
    }
?>