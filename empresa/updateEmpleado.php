<?php

include("../conexion.php");
$con=conectar();

$id_empresa=$_POST['id_empresa'];
$usuarioE=$_POST['usuarioE'];
$passE=$_POST['passE'];

$sql="UPDATE EMPRESA SET USUARIO='$usuarioE',PASS='$passE' WHERE ID_EMPRESA='$id_empresa'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: empleado.php");
    }
?>