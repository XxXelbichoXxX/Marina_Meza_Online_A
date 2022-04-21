<?php
include("../conexion.php");
$con=conectar();

$nombreTipo=$_POST['nombreS'];

$sql="INSERT INTO TIPO_SERVICIO (NOMBRE_TIPO_SER) VALUES('$nombreTipo')";
$query=mysqli_query($con,$sql);
if($query){
    Header("Location: tipoServicio.php");
}else{

}

?>