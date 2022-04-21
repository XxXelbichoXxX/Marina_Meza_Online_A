<?php 
    include("../conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM EVENTO WHERE CLAVE_EVENTO='$id'";
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
                    <form action="updateEvento.php" method="POST">
                                <input type="hidden" name="clave_evento" value="<?php echo $row['CLAVE_EVENTO']  ?>">

                                <input type="number" class="form-control mb-3" name="idTipoEv" placeholder="Tipo de evento: "value="<?php echo $row['ID_TIPO_EVENTO']  ?>">
                                <input type="number" class="form-control mb-3" name="idCliente" placeholder="Cliente: "value="<?php echo $row['ID_CLIENTE']  ?>">
                                <input type="text" class="form-control mb-3" name="lugarEvento" placeholder="Lugar de evento:"value="<?php echo $row['LUGAR']  ?>">
                                <input type="date" class="form-control mb-3" name="fechaEv" placeholder="Fecha de evento:"value="<?php echo $row['FECHA_EVENTO']  ?>">
                                <input type="time" class="form-control mb-3" name="horaEv" placeholder="Hora de evento:"value="<?php echo $row['HORA']  ?>">
                                <input type="number" class="form-control mb-3" name="aforo" placeholder="Aforo: "value="<?php echo $row['AFORO']  ?>">
                                <input type="text" class="form-control mb-3" name="estatusEv" placeholder="Status de evento:"value="<?php echo $row['ESTATUS']  ?>">
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                            <a href="evento.php" class="btn btn-secondary">Cancelar</a></th>
                    </form>
                    
                </div>
    </body>
</html>