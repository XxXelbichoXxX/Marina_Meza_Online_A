<?php 
    include("../conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM EMPRESA WHERE ID_EMPRESA='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel ="stylesheet" type="text/css" href="../libs/css/bootstrap.css">
        <title>USUARIOS</title>
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="updateEmpleado.php" method="POST">
                                <input type="hidden" name="id_empresa" value="<?php echo $row['ID_EMPRESA']  ?>">
                                <input type="text" class="form-control mb-3" name="usuarioE" placeholder="Usuario:" value="<?php echo $row['USUARIO']  ?>">
                                <input type="password" class="form-control mb-3" name="passE" placeholder="Contraseña:" value="<?php echo $row['PASS']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>