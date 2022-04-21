<?php 
    include("../conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM CITA WHERE ID_CITA='$id'";
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
        <title>Citas</title>
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="updateCita.php" method="POST">
                                <input type="hidden" name="id_cita" value="<?php echo $row['ID_CITA']  ?>">
                             
                                <input type="text" class="form-control mb-3" name="nombreV" placeholder="Nombre(s)" value="<?php echo $row['NOMBRES']  ?>">
                                <input type="text" class="form-control mb-3" name="apellidosV" placeholder="apellidos" value="<?php echo $row['APELLIDOS']  ?>">
                                <input type="text" class="form-control mb-3" name="telefonoV" placeholder="Telefono:"value="<?php echo $row['TELEFONO']  ?>">
                                <input type="number" class="form-control mb-3" name="tipoEv" placeholder="Tipo de evento:"value="<?php echo $row['ID_TIPO_EVENTO']  ?>">
                                <input type="number" class="form-control mb-3" name="aforo" placeholder="Aforo:"value="<?php echo $row['AFORO']  ?>">
                                <input type="date" class="form-control mb-3" name="fechaC" placeholder="Fecha de cita:"value="<?php echo $row['FECHA_CITA']  ?>">
                                <input type="time" class="form-control mb-3" name="horaC" placeholder="Hora de cita:"value="<?php echo $row['HORA_CITA']  ?>">
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>