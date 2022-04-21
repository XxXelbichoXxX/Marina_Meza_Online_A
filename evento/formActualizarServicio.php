<?php 
    include("../conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM DETALLE_SERVICIO WHERE ID_DETALLE='$id'";
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
        <title>Eventos</title>
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="updateServicio.php" method="POST">
                                <input type="hidden" name="id_detalle" value="<?php echo $row['ID_DETALLE']  ?>">

                                <input type="number" class="form-control mb-3" name="idServicio" placeholder="Id del servicio:"value="<?php echo $row['ID_PROVEEDOR']  ?>">
                                <input type="text" class="form-control mb-3" name="claveEvento" placeholder="Clave de evento:"value="<?php echo $row['CLAVE_EVENTO']  ?>">
                                <input type="text" class="form-control mb-3" name="estatusSv" placeholder="Estatus de servicio:"value="<?php echo $row['ESTATUS']  ?>">
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                            <a href="detalleEvento.php?id=<?php echo $row['CLAVE_EVENTO'] ?>" class="btn btn-secondary">Cancelar</a></th>
                    </form>
                    
                </div>
    </body>
</html>