
<?php
    include("../../conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM tipo_evento";
    $query=mysqli_query($con,$sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" type="text/css" href="../../libs/css/bootstrap.css">
    <title>TipoEvento</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8">
                <h1>Tipo de Eventos</h1>
                <table class="table">
                    <thead class="table-success table-striped">
                        <tr>
                            <th>Id Tipo_Evento</th>
                            <th>Nombre_Tipo</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                            <?php
                                while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php echo $row['ID_TIPO_EVENTO']?></th>
                                                <th><?php echo $row['NOMBRE_TIPO']?></th>                                       
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