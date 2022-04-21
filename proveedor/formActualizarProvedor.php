<?php 
    include("../conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM PROVEEDOR WHERE ID_PROVEEDOR='$id'";
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
        <title>PROVEEDOR</title>
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="updateProvedor.php" method="POST">
                                <input type="hidden" name="id_proveedor" value="<?php echo $row['ID_PROVEEDOR']  ?>">
                             
                                <input type="text" class="form-control mb-3" name="nombreP" placeholder="Nombre(s)" value="<?php echo $row['NOMBRE_PROVEEDOR']  ?>">
                                <input type="number" class="form-control mb-3" name="Tipo_Ser" placeholder="Tipo Servicio" value="<?php echo $row['ID_TIPO_SER']  ?>">
                                <input type="text" class="form-control mb-3" name="telefonoP" placeholder="Telefono:"value="<?php echo $row['TELEFONO']  ?>">
                                <input type="text" class="form-control mb-3" name="descripcionP" placeholder="Descripcion:"value="<?php echo $row['DESCRIPCION']  ?>">
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>