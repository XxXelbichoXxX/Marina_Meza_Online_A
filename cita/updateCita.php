<?php

include("../conexion.php");
$con=conectar();

$id_cita=$_POST['id_cita'];
$nombreV=$_POST['nombreV'];
$apellidoV=$_POST['apellidosV'];
$telefonoV=$_POST['telefonoV'];
$tipoEv=$_POST['tipoEv'];
$aforo=$_POST['aforo'];
$fechaC=$_POST['fechaC'];
$horaC=$_POST['horaC'];

$sql="UPDATE CITA SET NOMBRES='$nombreV',APELLIDOS='$apellidoV',telefono='$telefonoV',aforo='$aforo',ID_TIPO_EVENTO='$tipoEv',FECHA_CITA='$fechaC',HORA_CITA='$horaC' WHERE ID_CITA='$id_cita'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: cita.php");
    }
?>