<?php
include("../conexion.php");
$con=conectar();

$id_empresa=$_GET['id'];

$sql="DELETE FROM EMPRESA WHERE ID_EMPRESA = '$id_empresa'";
$query=mysqli_query($con,$sql);
if($query){
    Header("Location: empleado.php");
}else{
    
}

?>