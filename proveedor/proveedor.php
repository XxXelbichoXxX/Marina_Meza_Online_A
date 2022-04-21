<?php
    include("../conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM proveedor";
    $query=mysqli_query($con,$sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" type="text/css" href="../libs/css/bootstrap.css">
    <title>Proveedores</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3">
                <h1>formulario de proveedor</h1>
                <form action="insertarProveedor.php" method="POST">
                    <input type="text" class="form-control mb-3" name="nombreP" placeholder="Nombre(S):">
                    <input type="number" class="form-control mb-3" name="Tipo_Ser" placeholder="Tipo Servicio:">
                    <input type="text" class="form-control mb-3" name="telefonoP" placeholder="Telefono:">
                    <input type="text" class="form-control mb-3" name="descripcionP" placeholder="Descripcion:">
                    <input type="submit" class="btn btn-primary">
                    <a href="../index.html" class="btn btn-secondary">Ir al inicio</a></th>
                </form>

            </div>
            <div class="col-md-8">
                <h1>Proveedor</h1>
                <table class="table">
                    <thead class="table-success table-striped">
                        <tr>
                            <th>Id Proveedor</th>
                            <th>Id Servicio</th>
                            <th>Nombre(S)</th>
                            <th>Telefono</th>
                            <th>Descripcion</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                            <?php
                                while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php echo $row['ID_PROVEEDOR']?></th>
                                                <th><?php echo $row['ID_TIPO_SER']?></th>
                                                <th><?php echo $row['NOMBRE_PROVEEDOR']?></th>
                                                <th><?php echo $row['TELEFONO']?></th>
                                                <th><?php echo $row['DESCRIPCION']?></th>
                                                <th><a href="formActualizarProvedor.php?id=<?php echo $row['ID_PROVEEDOR'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="eliminarProveedor.php?id=<?php echo $row['ID_PROVEEDOR'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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