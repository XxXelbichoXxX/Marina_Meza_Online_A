<?php

include("../conexion.php");
$con=conectar();

$id_proveedor=$_POST['id_proveedor'];
$nombreP=$_POST['nombreP'];
$telefonoP=$_POST['telefonoP'];
$decripcionP=$_POST['descripcionP'];
$TipoSer=$_POST['Tipo_Ser'];

$sql="UPDATE proveedor SET ID_TIPO_SER = '$TipoSer',NOMBRE_PROVEEDOR='$nombreP',TELEFONO='$telefonoP',DESCRIPCION='$decripcionP' WHERE ID_PROVEEDOR='$id_proveedor'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: proveedor.php");
    }
?>