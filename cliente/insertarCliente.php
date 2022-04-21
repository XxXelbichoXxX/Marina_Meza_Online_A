<?php
include("../conexion.php");
$con=conectar();

$nombreC=$_POST['nombreC'];
$apellidoC=$_POST['apellidoC'];
$telefonoC=$_POST['telefonoC'];
$correoC=$_POST['correoC'];
$sql="INSERT INTO CLIENTE (NOMBRES,APELLIDO,TELEFONO,CORREO) VALUES('$nombreC','$apellidoC','$telefonoC','$correoC')";
$query=mysqli_query($con,$sql);
if($query){
    Header("Location: cliente.php");
}else{

}

?>