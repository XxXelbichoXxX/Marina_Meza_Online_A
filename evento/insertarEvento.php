<?php
include("../conexion.php");
$con=conectar();

$claveEvento=$_POST['claveEvento'];
$tipoEvento=$_POST['idTipoEv'];
$cliente=$_POST['idCliente'];
$fechaEv=$_POST['fechaEv'];
$lugarEv=$_POST['lugarEvento'];
$aforo=$_POST['aforo'];
$horaEv=$_POST['horaEv'];
$status=$_POST['estatusEv'];

$sql="INSERT INTO EVENTO VALUES('$claveEvento','$tipoEvento','$cliente','$fechaEv','$lugarEv','$aforo','$horaEv','$status')";
$query=mysqli_query($con,$sql);
if($query){
    Header("Location: evento.php");
}else{

}

?>