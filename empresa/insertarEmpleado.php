<?php
include("../conexion.php");
$con=conectar();

$usuarioE=$_POST['usuarioE'];
$passE=$_POST['passE'];
$sql="INSERT INTO EMPRESA (USUARIO,PASS) VALUES('$usuarioE','$passE')";
$query=mysqli_query($con,$sql);
if($query){
    Header("Location: empleado.php");
}else{

}

?>