<?php
include("../conexion.php");
$con=conectar();

$ID_TIPO_EVENTO=$_POST['ID_TIPO_EVENTO'];
$NOMBRE_TIPO=$_POST['NOMBRE_TIPO'];
$sql="INSERT INTO tipo_evento (NOMBRE_TIPO) VALUES('$NOMBRE_TIPO')";
$query=mysqli_query($con,$sql);
if($query){
    Header("Location: TipoEvento.php");
}else{

}

?>