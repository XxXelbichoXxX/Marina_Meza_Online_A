<?php
    include("../conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM cliente";
    $query=mysqli_query($con,$sql); 
    ini_set('display_errors', 0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="datatable-container">
            <div class="header-tools">
                <div class="search">
                    <input type="text" name="" id=""class="search-input">
                </div>
                
            </div>   
            <table class="datatable">
                <thead>
                    
                        <tr> 
                            <th>Id del cliente</th>
                            <th>Nombre(S) del cliente</th>
                            <th>Apellidos del cliente</th>
                            <th>Telefono del cliente</th>
                            <th>Correo del cliente</th>
                        </tr>
                    </div>
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
                                <th> 
                                <a href="formActualizarCliente.php?id=<?php echo $row['ID_CLIENTE'] ?>">
                                    <input type="button" class="button_css" value="Editar">
                                </a>
                                </th>
                                <th> 
                                <a href="eliminarCliente.php?id=<?php echo $row['ID_CLIENTE'] ?>">
                                    <input type="button" class="button_css" value="Eliminar">
                                </a>
                                </th>                                
                            </tr>
                <?php 
                                            }
                       ?>
                </tbody>   
            </table>   
            <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
            <link rel ="stylesheet" type="text/css" href="../libs/css/estilos.css">
</body>
</html>