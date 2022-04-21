<?php
include("../conexion.php");
$con=conectar();

$id_cliente=$_GET['id'];

$sql="DELETE FROM CLIENTE WHERE ID_CLIENTE = '$id_cliente'";
$query=mysqli_query($con,$sql);
if($query){
    Header("Location: cliente.php");
}else{
    
}

?>