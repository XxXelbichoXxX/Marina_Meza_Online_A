<?php
include("../conexion.php");
$con=conectar();

$nombreC=$_POST['nombreP'];
$telefonoC=$_POST['telefonoP'];
$correoC=$_POST['descripcionP'];
$TipoSer=$_POST['Tipo_Ser'];

$sql="INSERT INTO proveedor (ID_TIPO_SER,NOMBRE_PROVEEDOR,TELEFONO,DESCRIPCION) VALUES('$TipoSer','$nombreC','$telefonoC','$descipcionP')";
$query=mysqli_query($con,$sql);
if($query){
    Header("Location: proveedor.php");
}else{

}

?>