<?php
    include("../../conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM empresa";
    $query=mysqli_query($con,$sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" type="text/css" href="../../libs/css/bootstrap.css">
    <title>Usuarios</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            
            <div class="col-md-8">
                <h1>Registros de usuarios</h1>
                <table class="table">
                    <thead class="table-success table-striped">
                        <tr>
                            <th>Id usuario</th>
                            <th>Usuario</th>
                            <th>Contraseña</th>
                            <th></th>
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
                                                <th><?php echo $row['id_cargo']?></th>
                                                <th><?php echo $row['usuario']?></th>
                                                <th><?php echo $row['PASS']?></th>                                                                          
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