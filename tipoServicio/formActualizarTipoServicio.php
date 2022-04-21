<?php 
    include("../conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM TIPO_SERVICIO WHERE ID_TIPO_SER='$id'";
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
        <title>Actualizar tipo servicio</title>
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="updateTipoServicio.php" method="POST">
                                <input type="hidden" name="id_TipoS" value="<?php echo $row['ID_TIPO_SER']  ?>">
                             	<input type="text" class="form-control mb-3" name="nombreS" placeholder="Nombre del servicio:" value="<?php echo $row['NOMBRE_TIPO_SER']  ?>">
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>