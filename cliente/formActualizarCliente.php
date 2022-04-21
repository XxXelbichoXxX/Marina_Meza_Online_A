<?php 
    include("../conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM CLIENTE WHERE ID_CLIENTE='$id'";
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
        <title>CLIENTES</title>
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="updateCliente.php" method="POST">
                                <input type="hidden" name="id_cliente" value="<?php echo $row['ID_CLIENTE']  ?>">
                             
                                <input type="text" class="form-control mb-3" name="nombreC" placeholder="Nombre(s)" value="<?php echo $row['NOMBRES']  ?>">
                                <input type="text" class="form-control mb-3" name="apellidosC" placeholder="apellidos" value="<?php echo $row['APELLIDO']  ?>">
                                <input type="text" class="form-control mb-3" name="telefonoC" placeholder="Telefono:"value="<?php echo $row['TELEFONO']  ?>">
                                <input type="text" class="form-control mb-3" name="correoC" placeholder="Correo:"value="<?php echo $row['CORREO']  ?>">
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>