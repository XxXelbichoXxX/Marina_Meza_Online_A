<?php

include("../conexion.php");
$con=conectar();

$clave_evento=$_POST['clave_evento'];
$idTipoEv=$_POST['idTipoEv'];
$idCliente=$_POST['idCliente'];
$lugarEvento=$_POST['lugarEvento'];
$fechaEv=$_POST['fechaEv'];
$horaEv=$_POST['horaEv'];
$aforo=$_POST['aforo'];
$estatus=$_POST['estatusEv'];

$sql="UPDATE EVENTO SET ID_TIPO_EVENTO='$idTipoEv',ID_CLIENTE='$idCliente',FECHA_EVENTO='$fechaEv',LUGAR='$lugarEvento',AFORO='$aforo',HORA='$horaEv',ESTATUS='$estatus' WHERE CLAVE_EVENTO='$clave_evento'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: evento.php");
    }
?>