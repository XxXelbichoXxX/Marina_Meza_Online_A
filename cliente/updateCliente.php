<?php

include("../conexion.php");
$con=conectar();

$id_cliente=$_POST['id_cliente'];
$nombreC=$_POST['nombreC'];
$apellidoC=$_POST['apellidoC'];
$telefonoC=$_POST['telefonoC'];
$correoC=$_POST['correoC'];

$sql="UPDATE CLIENTE SET NOMBRES='$nombreC',APELLIDO='$apellidoC',TELEFONO='$telefonoC',CORREO='$correoC' WHERE ID_CLIENTE='$id_cliente'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: cliente.php");
    }
?>