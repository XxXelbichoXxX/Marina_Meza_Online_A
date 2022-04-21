<?php
$evento=$_POST['clave'];
session_start();
$_SESSION['clave']=$evento;

$conexion=mysqli_connect("localhost","root","","bd_marinamezaonline");

$consulta="SELECT*FROM evento where CLAVE_EVENTO='$evento'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_fetch_array($resultado);

if($filas['CLAVE_EVENTO']==$evento){ //administrador
    header("Location: detalleEvento.php?id=$evento");
}
else{
    include("buscarEvento.html");
    echo "<script>alert('Evento no valido.');</script>";
}
mysqli_free_result($resultado);
mysqli_close($conexion);