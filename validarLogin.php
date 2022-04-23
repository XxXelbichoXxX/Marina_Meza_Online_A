<?php
ini_set('display_errors', 0);


$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;

$conexion=mysqli_connect("localhost","root","","bd_marinamezaonline");

$consulta="SELECT*FROM empresa where usuario='$usuario' and pass='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_fetch_array($resultado);

if($filas['id_cargo']==1){ //administrador
    header("Location: index.html");

}else
if($filas['id_cargo']==2){ //empleado
    header("Location: Empleado/empleado.php");
}
else{
    include("login.html");
    echo "<script>alert('Usuario no valido.');</script>";
}
mysqli_free_result($resultado);
mysqli_close($conexion);