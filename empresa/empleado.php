<?php
    include("../conexion.php");
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
    <link rel ="stylesheet" type="text/css" href="../libs/css/bootstrap.css">
    <title>Usuarios</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3">
                <h1>formulario de usuario</h1>
                <form action="insertarEmpleado.php" method="POST">
                    <input type="text" class="form-control mb-3" name="usuarioE" placeholder="Usuario:">
                    <input type="password" class="form-control mb-3" name="passE" placeholder="Contraseña:">
                    <input type="submit" class="btn btn-primary">
                    <a href="../index.html" class="btn btn-secondary">Ir al inicio</a></th>
                </form>

            </div>
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
                                                <th><?php echo $row['ID_EMPRESA']?></th>
                                                <th><?php echo $row['USUARIO']?></th>
                                                <th><?php echo $row['PASS']?></th>
                                                <th><a href="formActualizarEmpleado.php?id=<?php echo $row['ID_EMPRESA'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="eliminarEmpleado.php?id=<?php echo $row['ID_EMPRESA'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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