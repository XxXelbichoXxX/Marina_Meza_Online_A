<?php
    include("../../conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM evento";
    $query=mysqli_query($con,$sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" type="text/css" href="../../libs/css/bootstrap.css">
    <title>Evento</title>
</head>
<body>
    <div class="container mt-5">
            <div class="col-md-8">
                <h1>Registros de eventos</h1>
                <table class="table">
                    <thead class="table-success table-striped">
                        <tr>
                            <th>Clave de evento</th>
                            <th>Tipo de evento</th>
                            <th>Id del cliente</th>
                            <th>Lugar del evento</th>
                            <th>Fecha de evento</th>
                            <th>Hora de evento</th>
                            <th>Aforo</th>
                            <th>Status</th>
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
                                                <th><?php echo $row['CLAVE_EVENTO']?></th>
                                                <th><?php echo $row['ID_TIPO_EVENTO']?></th>
                                                <th><?php echo $row['ID_CLIENTE']?></th>
                                                <th><?php echo $row['LUGAR']?></th>
                                                <th><?php echo $row['FECHA_EVENTO']?></th>
                                                <th><?php echo $row['HORA']?></th>
                                                <th><?php echo $row['AFORO']?></th>
                                                <th><?php echo $row['ESTATUS']?></th>                               
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
</html>