<?php
include("../conexion.php");
$con=conectar();

$nombreV=$_POST['nombreV'];
$apellidoV=$_POST['apellidoV'];
$telefonoV=$_POST['telefonoV'];
$tipoEv=$_POST['tipoEv'];
$aforo=$_POST['aforo'];
$fechaC=$_POST['fechaC'];
$horaC=$_POST['horaC'];

$sql="INSERT INTO CITA (ID_TIPO_EVENTO,NOMBRES,APELLIDOS,TELEFONO,AFORO,FECHA_CITA,HORA_CITA) VALUES('$tipoEv','$nombreV','$apellidoV','$telefonoV','$aforo','$fechaC','$horaC')";
$query=mysqli_query($con,$sql);
if($query){
    Header("Location: cita.php");
}else{

}

?>