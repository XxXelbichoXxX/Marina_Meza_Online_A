<?php
    include("../../conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM cliente";
    $query=mysqli_query($con,$sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" type="text/css" href="../../libs/css/bootstrap.css">
    <title>Clientes</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            </div>
            <div class="col-md-8">
                <h1>Registros de clientes</h1>
                <table class="table">
                    <thead class="table-success table-striped">
                        <tr>
                            <th>Id cliente</th>
                            <th>Nombre(S)</th>
                            <th>Apellidos</th>
                            <th>Telefono</th>
                            <th>Correo</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                            <?php
                                while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php echo $row['ID_CLIENTE']?></th>
                                                <th><?php echo $row['NOMBRES']?></th>
                                                <th><?php echo $row['APELLIDO']?></th>
                                                <th><?php echo $row['TELEFONO']?></th>
                                                <th><?php echo $row['CORREO']?></th>                                   
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