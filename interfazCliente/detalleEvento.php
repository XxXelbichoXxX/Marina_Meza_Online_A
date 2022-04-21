<?php
    include("../conexion.php");
    $con=conectar();

    $clave_evento=$_GET['id'];
    $sql="SELECT *  FROM detalle_servicio where CLAVE_EVENTO='$clave_evento'";
    $query=mysqli_query($con,$sql);
    $sql2="SELECT *  FROM solicitud where CLAVE_EVENTO='$clave_evento'";
    $query2=mysqli_query($con,$sql2);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" type="text/css" href="../libs/css/bootstrap.css">
    <title>Evento</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3">
                <h1>formulario de solicitudes de servicio</h1>
                <form action="insertarSolicitud.php" method="POST">
                    <input type="number" class="form-control mb-3" name="idServicio" placeholder="Id del servicio:">
                    <input type="text" class="form-control mb-3" name="claveEvento" placeholder="Clave de evento:"value="<?php echo $clave_evento ?>">
                    <input type="text" class="form-control mb-3" name="descripcion" placeholder="descripción de servicio: ">

                    <input type="submit" class="btn btn-primary">
                    <a href="../index.html" class="btn btn-secondary">Cerrar sesión</a></th>
                </form>

            </div>
            <div class="col-md-8">
                <h1>Registros de servicios del evento</h1>
                <table class="table">
                    <thead class="table-success table-striped">
                        <tr>
                            <th>Id de detalle</th>
                            <th>Id de servicio</th>
                            <th>Clave de evento</th>
                            <th>Estatus</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                            <?php
                                while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php echo $row['ID_DETALLE']?></th>
                                                <th><?php echo $row['ID_PROVEEDOR']?></th>
                                                <th><?php echo $row['CLAVE_EVENTO']?></th>
                                                <th><?php echo $row['ESTATUS']?></th>
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                    </tbody>
                </table>
            </div>
                    <div class="col-md-8">
                <h1>Registros de solicitudes del evento</h1>
                <table class="table">
                    <thead class="table-success table-striped">
                        <tr>
                            <th>Id solicitud</th>
                            <th>Id de servicio</th>
                            <th>Clave de evento</th>
                            <th>Descripcion</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                            <?php
                                while($row=mysqli_fetch_array($query2)){
                                        ?>
                                            <tr>
                                                <th><?php echo $row['ID_SOLICITUD']?></th>
                                                <th><?php echo $row['ID_TIPO_SER']?></th>
                                                <th><?php echo $row['CLAVE_EVENTO']?></th>
                                                <th><?php echo $row['DESCRIPCION']?></th>
                                                <th><a href="formActualizarSolicitud.php?id=<?php echo $row['ID_SOLICITUD'] ?>" class="btn btn-info">Editar</a></th>
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html